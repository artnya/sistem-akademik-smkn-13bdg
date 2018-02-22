<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Timeline;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CommentRequest;
use Illuminate\Support\Carbon;
use Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        Carbon::setlocale(LC_TIME, 'id');
        $sekarang = Carbon::now();
        $guru = User::where('role', '3')->get();
        $gurucount = $guru->count();
        $siswa = User::where('created_at', '>=', Carbon::today())->get();
        $siswacount = $siswa->count();
        $siswas = User::where('role', '1')->get();
        $siswascount = $siswas->count();
        $allcount = User::count();
        $posts = Timeline::where('read_at', NULL);
        $post = $posts->count();
        $accs = User::where('role', '5')->get();
        if (Auth()->user()->role == '0') {
            return redirect()->route('verification', str_slug(Auth()->user()->name));
        }elseif(Auth()->user()->role == '5')
        {
            return redirect()->route('verification.last.step', str_slug(Auth()->user()->name));
        }else{
            $account = User::all();
        return view('home')->with('sekarang', $sekarang)->with('gurucount', $gurucount)->with('siswacount', $siswacount)->with('allcount', $allcount)->with('siswa', $siswa)->with('siswascount', $siswascount)->with('post', $post)->with('accs', $accs)->with('account', $account);
        }
    }


    public function showchangepassword()
    {
        return view('auth.passwords.changepassword');
    }

    public function changepassword(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }
 
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }
 
        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);
 
        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
 
        return redirect()->back()->with("message","Password changed successfully !");
    }

    public function store(CommentRequest $request)
    {
        $post = Timeline::findOrFail($request->post_id);
 
        Comment::create([
            'body' => $request->body,
            'user_id' => $request->user_id,
            'post_id' => $post->id
        ]);
        return redirect()->route('posts.show', $post->id);
    }

    public function verify(Request $request, $id)
    {
        $this->validate($request, [

            'role' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'id_kelas' => 'required',


        ]);
    }
}
