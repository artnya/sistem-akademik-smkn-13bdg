<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekapNilai;
use App\User;
use App\Kelas;
use App\Mapel;
use App\Tahun;
use App\Jurusan;
use Excel;

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
    public function show(Request $request, $id)
    {

        $siswa = User::find($id);
        $q = $request->get('q');
        if ($request->get('q')) {
        $hasil = RekapNilai::when($q, function ($query) use ($request) {
        $query->where('id_siswa', 'like', "%{$request->id_siswa}%")->where('semester', 'like', "%{$request->q}%");
            })->get();
        return view('rekapnilai.rekap-nilai', compact('hasil', 'siswa', 'q'));   
        }else{
            $q = 1;
            $hasil = RekapNilai::where('id_siswa', $id)->where('semester', $q)->get();    
            return view('rekapnilai.rekap-nilai', compact('hasil', 'siswa', 'q'))->with('messageerror', 'Nilai semester'. $q .' belum di di masukan.');   
        }

       /* $mapels = Mapel::all();
        $in1 = RekapNilai::where('id_siswa', $id)->where('semester', '1')->get();
        $semester2 = RekapNilai::where('id_siswa', $id)->where('semester', '2')->get();
        $in2 = RekapNilai::where('id_siswa', $id)->where('semester', '2')->get();
        $semester3 = RekapNilai::where('id_siswa', $id)->where('semester', '3')->get();
        $in3 = RekapNilai::where('id_siswa', $id)->where('semester', '3')->get();
        $semester4 = RekapNilai::where('id_siswa', $id)->where('semester', '4')->get();
        $in4 = RekapNilai::where('id_siswa', $id)->where('semester', '4')->get();
        $semester5 = RekapNilai::where('id_siswa', $id)->where('semester', '5')->get();
        $in5 = RekapNilai::where('id_siswa', $id)->where('semester', '5')->get();
        $semester6 = RekapNilai::where('id_siswa', $id)->where('semester', '6')->get();
        $in6 = RekapNilai::where('id_siswa', $id)->where('semester', '6')->get();

        return view('rekapnilai.rekap-nilai', compact('siswa', 'mapels', 'semester1', 'semester2', 'semester3', 'semester4', 'semester5', 'semester6', 'in1', 'in2', 'in3', 'in4', 'in5', 'in6'));
        */
    }

    public function downloadNilai($type)
    {
        $data = RekapNilai::select('id','id_siswa','semester','id_mapel','tugas1','tugas2','tugas3','nilai_sikap', 'nilai_pengetahuan','uts','uas')->get()->toArray();
        return Excel::create('hasil_nilai', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function cetak($semester, $id)
    {
        $un = User::find($id);
        $semester = RekapNilai::where('id_siswa', $id)->where('semester', $semester)->get();
        return view('rekapnilai.cetak-nilai.cetak', compact('un', 'semester'));
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

        $all = $request->all();
        $storage = RekapNilai::find($id);
        $storage->update($all);

        return redirect()->back()->with('message', 'Nilai berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $hapus = RekapNilai::destroy($request->checked); 
        return back()->with('message', 'Nilai berhasil di hapus!');
    }
}
