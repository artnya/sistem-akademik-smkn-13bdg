<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mapel;
use App\MapelProduktif;
use App\Jurusan;


class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = User::where('role', '3')->get();
        $mapel = mapel::where('type_mapel', '=', 'Non produktif')->get();
        $mapelproduktif = mapel::where('type_mapel', '=', 'Produktif')->get();
        if (Auth()->user()->role != '0' || Auth()->user()->role != '5') {
            return view('guru.index', compact('guru','mapel', 'mapelproduktif'));
        }else{
            return redirect()->back()->with('messageerror', 'Anda tidak boleh memasuki area ini selamat belum verifikasi!');
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

            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'alamat' => 'required',
            'id_mapel' => 'required',
            'photo' => 'required',
            'jenis_kelamin' => 'required',

        ]);

        $storage = new User();
        $storage->username = $request->username;
        $storage->name = $request->name;
        $storage->email = $request->email;
        $storage->tmp_lahir = $request->tmp_lahir;
        $storage->tgl_lahir = $request->tgl_lahir;
        $storage->agama = $request->agama;
        $storage->goldar = $request->goldar;
        $storage->alamat = $request->alamat;
        $storage->id_mapel = $request->id_mapel;
        $storage->photo = $request->photo;
        $storage->jenis_kelamin = $request->jenis_kelamin;
        $storage->save();

        return redirect('guru')->with('message', 'Data berhasil di tambahan');
    }


    public function mapel(Request $request, $id)
    {
        $this->validate($request, [

            'id_mapel' => 'required',
        ]);

        $storage = User::find($id);
        $storage->id_mapel = $request->id_mapel;
        $storage->save();

        return redirect()->back()->with('message', 'Guru ' ."$storage->name". ' berhasil telah di tambah mata pelajarannya.');
    }

    public function mapelproduktif($id)
    {
        $this->validate($request, [

            'id_mapel' => 'required',
        ]);

        $storage = User::find($id);
        $storage->id_mapel = $request->id_mapel;
        $storage->save();

        return redirect('guru')->with('message', 'Guru '."$storage->name".' berhasil di tambah mata pelajarannya.');
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

            'username' => 'required',
            'name' => 'required',
            'email' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'alamat' => 'required',
            'id_mapel' => 'required',
            'jenis_kelamin' => 'required',

        ]);

        $storage = User::find($id);
        $storage->username = $request->username;
        $storage->name = $request->name;
        $storage->email = $request->email;
        $storage->tmp_lahir = $request->tmp_lahir;
        $storage->tgl_lahir = $request->tgl_lahir;
        $storage->agama = $request->agama;
        $storage->goldar = $request->goldar;
        $storage->alamat = $request->alamat;
        $storage->id_mapel = $request->id_mapel;
        $storage->jenis_kelamin = $request->jenis_kelamin;
        $storage->save();

        return redirect('guru')->with('message', 'Data berhasil di tambahan');
    }


     public function uploadpic(Request $request, $id)
    {
        $this->validate($request, [

            'photo' => 'required',

        ]);

        $storage = User::find($id);
        $gambar = $request->file('photo');
        $namaFile = $gambar->getClientOriginalName();
        $request->file('photo')->move('uploadgambar', $namaFile);
        $storage->photo = $namaFile;
        $storage->save();
        return redirect('guru')->with('message', 'Foto profil telah di ganti!');
    }

    public function resetpic(Request $request, $id)
    {
        $storage = User::find($id);
        $storage->photo =  $request->reset;
        $storage->save();
        return redirect('guru')->with('message', 'Foto profil telah di ganti!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = User::find($id);
        $guru->delete();
        return redirect('guru')->with('message', 'Data berhasil di hapus');
    }

    public function destroychecked(Request $request, $id)
    {
         $checked = $request->input('checked',[]);
    
        if ($checked == null) {
          return redirect('guru')->with('message', 'Anda belum menceklis beberapa data untuk di hapus!');        
        }else{
          User::whereIn("id",$checked)->delete();
          return redirect('guru')->with('message', 'Data berhasil di hapus!');        
        }
    }
}
