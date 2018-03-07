<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use Hash;
use App\Notifications\AcceptedVerification;
use Notification;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('admin', ['except' => ['home']]);
    }
    
    public function index()
    {
        if (Auth()->user()->role == '2') {
            $account = User::all()->orderBy('name', 'desc')->get();
            return view('account.index', compact('account'));
        }else{
            return redirect()->back()->with('messageerror', 'Anda tidak boleh memasuki area ini!');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // save the user to the database
        $credentials = Input::only('email', 'password','name', 'username', 'role');
        $credentials['password'] = Hash::make($credentials['password']);
        $user = User::create($credentials);
        // return a view 
        return redirect()->back()->with('message', 'Akun berhasil di tambahkan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [

            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',

        ]);

        $storage = User::find($id);
        $storage->name = $request->name;
        $storage->username = $request->username;
        $storage->email = $request->email;
        $storage->role = $request->role;
        $storage->save();
        if ($storage->role == '1') {
            $role = 'Siswa';
        }elseif($storage->role == '2')
        {
            $role = 'Administrator';
        }elseif($storage->role == '3')
        {
            $role = 'Guru';
        }else{
            $role = 'terbanned/blokir';
        }

        if($storage->role =='4')
        {
        return redirect()->back()->with('message', "Anda telah berhasil memblokir akun ". $request->name .". Akun tidak dapat di akses selama prosedur ini berlangsung.");
        }else
        {

        $users = User::find($id);
        Notification::send($users, new AcceptedVerification($users));
        return redirect()->back()->with('message', "Akun ". $request->name ." berhasil di verifikasi sebagai akun ". $role .".");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = User::find($id);
        if (Auth()->user()->role == '2') {
            $account->delete();
            return redirect('Account')->with('message', 'Data berhasil di hapus');
        }else{
            return redirect()->back()->with('message', 'Anda tidak boleh memasuki area ini!');
        }
    }

    public function destroychecked(Request $request, $id)
    {
        
        $hapus = User::destroy($request->checked); 
        return back()->with('message', 'Account berhasil di hapus!');
    }
}
