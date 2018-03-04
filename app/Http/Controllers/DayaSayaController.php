<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekapNilai;
use App\User;

class DayaSayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $semester1 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '1')->get();
        $semester2 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '2')->get();
        $semester3 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '3')->get();
        $semester4 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '4')->get();
        $semester5 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '5')->get();
        $semester6 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '6')->get();
        return view('siswa.data-saya.index', compact('semester1', 'semester2', 'semester3','semester4','semester5','semester6'));
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
        /* $semester1 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '1')->get();
        $semester2 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '2')->get();
        $semester3 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '3')->get();
        $semester4 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '4')->get();
        $semester5 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '5')->get();
        $semester6 = RekapNilai::where('id_siswa', Auth()->user()->id)->where('semester', '6')->get();
        return view('siswa.data-saya.index', compact('semester1', 'semester2', 'semester3','semester4','semester5','semester6'));
        */
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
        //
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
