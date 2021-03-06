<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\User;
use App\Jurusan;


class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas = Kelas::orderBy('id', 'DESC')->get();
        $user = User::where('role', '3')->get();
        $jurusan = Jurusan::all();
        return view('kelas.index', compact('kelas','user','jurusan'));
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

            'tingkat_kelas' => 'required',
            'jumlah_kelas' => 'required',
            'nip' => 'required',
            'id_jurusan' => 'required',

        ]);

        $storage = new Kelas();
        $storage->tingkat_kelas = $request->tingkat_kelas;
        $storage->jumlah_kelas = $request->jumlah_kelas;
        $storage->nip = $request->nip;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->save();

        return redirect('kelas')->with('message', 'Data berhasil di tambahkan');
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

            'tingkat_kelas' => 'required',
            'jumlah_kelas' => 'required',
            'nip' => 'required',
            'id_jurusan' => 'required',

        ]);

        $storage = Kelas::find($id);
        $storage->tingkat_kelas = $request->tingkat_kelas;
        $storage->jumlah_kelas = $request->jumlah_kelas;
        $storage->nip = $request->nip;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->save();

        return redirect('kelas')->with('message', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('kelas')->with('message', 'Data berhasil di hapus');
    }

    public function destroychecked(Request $request)
    {
        $hapus = Kelas::destroy($request->checked); 
        return back()->with('message', 'Kelas berhasil di hapus!');
    }
}
