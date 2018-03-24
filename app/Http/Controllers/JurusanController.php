<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jurusan;
use App\User;
use App\Kelas;


class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::orderBy('id', 'DESC')->get();
            return view('jurusan.index', compact('jurusan'));
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

            'nama_jurusan' => 'required',
            'type_jurusan' => 'required',

        ]);

        $storage = new Jurusan();
        $storage->nama_jurusan = $request->nama_jurusan;
        $storage->type_jurusan = $request->type_jurusan;
        $storage->save();

        return redirect('jurusan')->with('message', 'Data berhasil di tambahkan');
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

            'nama_jurusan' => 'required',
            'type_jurusan' => 'required',

        ]);

        $storage = Jurusan::find($id);
        $storage->nama_jurusan = $request->nama_jurusan;
        $storage->type_jurusan = $request->type_jurusan;
        $storage->save();

        return redirect('jurusan')->with('message', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect('jurusan')->with('message', 'Data berhasil di hapus');
    }

    public function destroychecked(Request $request, $id)
    {
         $checked = $request->input('checked',[]);
    
        if ($checked == null) {
          return redirect('jurusan')->with('message', 'Anda belum menceklis beberapa data untuk di hapus!');        
        }else{
          Jurusan::whereIn("id",$checked)->delete();
          return redirect('jurusan')->with('message', 'Data berhasil di hapus!');        
        }
    }
}
