<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Jurusan;
use App\Kelas;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = User::where('role', '1')->get();
        $jurusan = Jurusan::all();
        $kelas = Kelas::all();
        if (Auth()->user()->role != '0' && Auth()->user()->role != '5') {
             return view('siswa.index', compact('siswa', 'jurusan', 'kelas'));
        }else{
            return redirect()->back()->with('messageerror', 'Anda tidak boleh memasuki area ini selama belum verifikasi!');
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

            'name' => 'required',
            'email' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'username' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'alamat' => 'required',
            'nama_ortu' => 'required',
            'pekerjaan_ortu' => 'required',

        ]);

        $storage = new User();
        $storage->name = $request->name;
        $storage->email = $request->email;
        $storage->id_kelas = $request->id_kelas;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->username = $request->username;
        $storage->tmp_lahir = $request->tmp_lahir;
        $storage->tgl_lahir = $request->tgl_lahir;
        $storage->agama = $request->agama;
        $storage->goldar = $request->goldar;
        $storage->alamat = $request->alamat;
        $storage->nama_ortu = $request->nama_ortu;
        $storage->pekerjaan_ortu = $request->pekerjaan_ortu;
        $storage->save();

        return redirect('siswa')->with('message', 'Data berhasil di tambahan');
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'name' => 'required',
            'email' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'username' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'goldar' => 'required',
            'alamat' => 'required',
            'nama_ortu' => 'required',
            'pekerjaan_ortu' => 'required',

        ]);

        $storage = User::find($id);
        $storage->name = $request->name;
        $storage->email = $request->email;
        $storage->id_kelas = $request->id_kelas;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->username = $request->username;
        $storage->tmp_lahir = $request->tmp_lahir;
        $storage->tgl_lahir = $request->tgl_lahir;
        $storage->agama = $request->agama;
        $storage->goldar = $request->goldar;
        $storage->alamat = $request->alamat;
        $storage->nama_ortu = $request->nama_ortu;
        $storage->pekerjaan_ortu = $request->pekerjaan_ortu;
        $storage->save();

        return redirect('siswa')->with('message', 'Data berhasil di edit');
        //
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
        return redirect('siswa')->with('message', 'Foto profil telah di ganti!');
    }

    public function resetpic(Request $request, $id)
    {
        $storage = User::find($id);
        $storage->photo =  $request->reset;
        $storage->save();
        return redirect('siswa')->with('message', 'Foto profil telah di ganti!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = User::find($id);
        $siswa->delete();
        return redirect('siswa')->with('message', 'Data berhasil di hapus');
    }

    public function destroychecked(Request $request, $id)
    {
         $checked = $request->input('checked',[]);
    
        if ($checked == null) {
          return redirect()->back()->with('message', 'Anda belum menceklis beberapa data untuk di hapus!');        
        }else{
          $siswa = User::whereIn("id",$checked);
          $siswa->delete();
          return redirect()->back()->with('message', 'Data berhasil di hapus!');        
        }
    }
}
