<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\RekapNilai;
use App\Mapel;
use App\Tahun;
use Carbon;
use Excel;
use Input;


class InputNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

            'semester' => 'required',
            'id_mapel' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'tugas1' => 'required',
            'tugas2' => 'required',
            'tugas3' => 'required',
            'nilai_sikap' => 'required',
            'nilai_pengetahuan' => 'required',
            'uts' => 'required',
            'uas' => 'required',

        ]);

        $storage = new RekapNilai();
        $storage->id_tahun = $request->id_tahun;
        $storage->semester = $request->semester;
        $storage->id_siswa = $request->id_siswa;
        $storage->id_mapel = $request->id_mapel;
        $storage->id_kelas = $request->id_kelas;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->tugas1 = $request->tugas1;
        $storage->tugas2 = $request->tugas2;
        $storage->tugas3 = $request->tugas3;
        $storage->nilai_sikap = $request->nilai_sikap;
        $storage->nilai_pengetahuan = $request->nilai_pengetahuan;
        $storage->uts = $request->uts;
        $storage->uas = $request->uas;
        $storage->save();

        return redirect()->route('rekapnilai.show', $request->id_siswa . '#' . $storage->semester)->with('message', 'Data berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tahun = Tahun::all();
        $mapel = Mapel::all();
        $siswa = User::find($id);
        $rekapnilai = RekapNilai::orderBy('id', 'DESC')->get();

        return view('rekapnilai.input-nilai', compact('tahun', 'siswa', 'mapel', 'rekapnilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //
    }

    public function importNilai(Request $request)
    {
        if($request->hasFile('imported-file'))
      {
                $path = $request->file('imported-file')->getRealPath();
                $data = Excel::load($path, function($reader)
                {
                    $reader->select(array('id_siswa', 'id_jurusan','id_kelas','tahun','pelajaran','semester','tugas1','tugas2','tugas3','sikap','pengetahuan','uts','uas'));

                })->get();

          if(!empty($data) && $data->count())
          {
            foreach ($data->toArray() as $row)
            {
              if(!empty($row))
              {
                $dataArray[] =
                [
                  'id_siswa' => $request->id_siswa,
                  'id_jurusan' => $request->id_jurusan,
                  'id_kelas' => $request->id_kelas,
                  'id_tahun' => $row['tahun'],
                  'id_mapel' => $row['pelajaran'],
                  'semester' => $row['semester'],
                  'tugas1' => $row['tugas1'],
                  'tugas2' => $row['tugas2'],
                  'tugas3' => $row['tugas3'],
                  'nilai_sikap' => $row['sikap'],
                  'nilai_pengetahuan' => $row['pengetahuan'],
                  'uts' => $row['uts'],
                  'uas' => $row['uas']
                ];
              }
          }
          if(!empty($dataArray))
          {
             RekapNilai::insert($dataArray);
             return back();
           }
         }
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
        //
    }
}
