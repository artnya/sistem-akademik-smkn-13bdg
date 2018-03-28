<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kelas;
use App\Timeline;
use App\Comment;
use Auth;
use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function myProfile($id)
    {
        $timeline = Timeline::orderBy('created_at', 'DESC')->get();
        $currentuserid = Auth::id();
        $walikelas = Kelas::where('nip', $currentuserid)->get();
        $postsaya = Timeline::where('id_user', $currentuserid)->orderBy('created_at', 'ASC')->get();  
        return view('profile-user.index', compact('timeline', 'postsaya', 'walikelas'));
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
    
    public function uploadpic(Request $request, $id)
    {
        $this->validate($request,
            [
                'photo'         => 'required|image|mimes:jpeg,jpg,png|max:10000',                    ]
            );


        $storage = User::find($id);
        if( $request->hasFile('photo') ) {
            $thumbnail     = $request->file('photo');
            $filename           = time() . '.' . $thumbnail->getClientOriginalExtension();
            
            $path       = 'uploadgambar/' . $filename;   // direktori gambar dengan nama uploads
            // resize gambar ke ukuran 100x100px
            Image::make($thumbnail)->resize(256, 290)->save($path);  

            $storage->photo = $filename;
            $storage->save();
            return redirect()->back()->with('message', 'Foto profil telah di ganti!');
        }

        /*
        $gambar = $request->file('photo');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('photo')->move('uploadgambar', $namaFile);
        $storage->photo = $namaFile;
        $storage->save();
        */
    }

    public function resetpic(Request $request, $id)
    {
        $storage = User::find($id);
        $storage->photo =  $request->reset;
        $storage->save();
        return redirect()->back()->with('message', 'Foto profile berhasil di hapus!');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $this->validate($request,
            [
                'tmp_lahir'         => 'required',
                'tgl_lahir'         => 'required',
                'alamat'         => 'required',
                'goldar'         => 'required',
                'agama'         => 'required',
                'nama_ortu'         => 'required',
                'pekerjaan_ortu'         => 'required',
            ]
            );
            $storage = User::find(Auth::id());
            $storage->fill($request->all());
            $storage->save();
            return back()->with('message', 'Berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
