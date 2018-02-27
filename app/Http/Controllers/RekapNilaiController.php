<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekapNilai;
use App\User;
use App\Kelas;
use App\Mapel;
use App\Tahun;
use App\Jurusan;


class RekapNilaiController extends Controller
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
        $siswa = User::where('role', '1')->orderby('name', 'ASC')->get();
        if (Auth()->user()->role != '0' && Auth()->user()->role != '5') {
            return view('rekapnilai.index', compact('siswa'));
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
    public function storeNilai(Request $request)
    { 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mapels = Mapel::all();
        $siswa = User::find($id);
        $semester1 = RekapNilai::where('id_siswa', $id)->where('semester', '1')->get();
        $semester2 = RekapNilai::where('id_siswa', $id)->where('semester', '2')->get();
        $semester3 = RekapNilai::where('id_siswa', $id)->where('semester', '3')->get();
        $semester4 = RekapNilai::where('id_siswa', $id)->where('semester', '4')->get();
        $semester5 = RekapNilai::where('id_siswa', $id)->where('semester', '5')->get();
        $semester6 = RekapNilai::where('id_siswa', $id)->where('semester', '6')->get();

        return view('rekapnilai.rekap-nilai', compact('siswa', 'mapels', 'semester1', 'semester2', 'semester3', 'semester4', 'semester5', 'semester6'));
    }


    public function showInputNilai($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = RekapNilai::find($id);
        $mapel = Mapel::orderBy('nama_mapel', 'DESC')->get();
        return view('rekapnilai.edit-nilai', compact('siswa', 'mapel'));
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

            'tugas1' => 'required',
            'tugas2' => 'required',
            'tugas3' => 'required',
            'nilai_sikap' => 'required',
            'nilai_pengetahuan' => 'required',
            'uts' => 'required',
            'uas' => 'required',

        ]);

        $storage = RekapNilai::find($id);
        $storage->tugas1 = $request->tugas1;
        $storage->tugas2 = $request->tugas2;
        $storage->tugas3 = $request->tugas3;
        $storage->nilai_sikap = $request->nilai_sikap;
        $storage->nilai_pengetahuan = $request->nilai_pengetahuan;
        $storage->uts = $request->uts;
        $storage->uas = $request->uas;
        $storage->save();

        return redirect()->back()->with('message', 'Nilai berhasil di edit');
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
