<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Timeline;
use App\User;
use App\Comment;


class DiscussGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth()->user()->role != '0' && Auth()->user()->role != '5') {
            $posts = Timeline::withCount('comments')->orderBy('created_at', 'DESC')->get();
            foreach ($posts as $post) {
                $comments = $post->comments->count();
            }
            return view('timeline.index', compact('posts', 'comments'));
        }else{
            return redirect()->back()->with('message', 'Anda tidak boleh memasuki area ini selamat belum verifikasi!');
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
        $this->validate($request, [

            'post' => 'required',

        ]);

        $storage = new Timeline();
        $storage->id_user = Auth::user()->id;
        $storage->post = $request->post;
        $storage->save();

        return redirect('/home/timeline')->with('message', 'Data berhasil di tambahan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Timeline::findOrFail($id);
        $user = User::all();
        $comment = Comment::whereIn('post_id', $post)->get();
        return view('show-timeline', compact('post', 'user', 'comment'));
    }


    public function share($id)
    {
        $shares = Timeline::findOrFail($id);
        return view('timeline.share', compact('shares'));
    }

    public function shareStore(Request $request)
    {
        $this->validate($request, [
            
            'shared_user' => 'required',
            'shared_desc' => 'required',
            'post' => 'required',

        ]);

        $post = new Timeline();
        $post->id_user = Auth::id();
        $post->post = $request->post;
        $post->shared_user = $request->shared_user;
        $post->shared_desc = $request->shared_desc;
        $post->save();

        return redirect('/home/timeline')->with('message', 'Data berhasil di tambahan');
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

            'id_user' => 'required',
            'post' => 'required',

        ]);

        $storage = Timeline::find($id);
        $storage->id_user = $request->id_user;
        $storage->post = $request->post;
        $storage->save();

        return redirect('timeline')->with('message', 'Data berhasil di tambahan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timeline = Timeline::find($id);
        $timeline->delete();
        return redirect('timeline')->with('message', 'Data berhasil di hapus');
    }

    public function destroychecked(Request $request, $id)
    {
         $checked = $request->input('checked',[]);
    
        if ($checked == null) {
          return redirect('timeline')->with('message', 'Anda belum menceklis beberapa data untuk di hapus!');        
        }else{
          Timeline::whereIn("id",$checked)->delete();
          return redirect('timeline')->with('message', 'Data berhasil di hapus!');        
        }
    }
}
