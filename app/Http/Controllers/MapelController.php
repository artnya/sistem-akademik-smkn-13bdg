<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapel;
use App\User;
use App\Jurusan;


class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mapel = Mapel::where('type_mapel', '=', 'Non produktif' )->orderBy('id', 'DESC')->get();
        $user = User::where('role', '3')->get();
        $jurusan = Jurusan::all();
        return view('mapel.index', compact('mapel','user','jurusan'));
    }

    public function mapelProduktif()
    {
        $mapelproduktif = Mapel::where('type_mapel', 'Produktif')->orderBy('id', 'DESC')->get();
        $jurusan = Jurusan::all();
        return view('mapel.produktif.index', compact('mapelproduktif', 'jurusan'));
    } 

    public function storeProduktif(Request $request)
    {
        $this->validate($request, [

            'nama_mapel' => 'required',
            'id_jurusan' => 'required',
            'kkm' => 'required',

        ]);

        $storage = new Mapel();
        $storage->nama_mapel = $request->nama_mapel;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->kkm = $request->kkm;
        $storage->save();

        return redirect('mapel')->with('message', 'Data berhasil di tambahan');
    }

    public function updateProduktif(Request $request, $id)
    {
        $this->validate($request, [

            'nama_mapel' => 'required',
            'id_jurusan' => 'required',
            'kkm' => 'required',

        ]);

        $storage = Mapel::find($id);
        $storage->nama_mapel = $request->nama_mapel;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->kkm = $request->kkm;
        $storage->save();

        return redirect('mapel')->with('message', 'Data berhasil di tambahan');
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

            'nama_mapel' => 'required',
            'type_mapel' => 'required',
            'kkm' => 'required',

        ]);

        $storage = new Mapel();
        $storage->nama_mapel = $request->nama_mapel;
        $storage->type_mapel = $request->type_mapel;
        $storage->kkm = $request->kkm;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->save();

        return redirect()->back()->with('message', 'Data berhasil di tambahan');
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

            'nama_mapel' => 'required',
            'type_mapel' => 'required',
            'kkm' => 'required',

        ]);

        $storage = Mapel::find($id);
        $storage->nama_mapel = $request->nama_mapel;
        $storage->type_mapel = $request->type_mapel;
        $storage->kkm = $request->kkm;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->save();

        return redirect()->back()->with('message', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Mapel = Mapel::find($id);
        $Mapel->delete();
        return redirect('mapel')->with('message', 'Data berhasil di hapus');
    }

    public function destroychecked(Request $request, $id)
    {
         $checked = $request->input('checkeditems',[]);
    
        if ($checked == null) {
          return redirect('mapel')->with('message', 'Anda belum menceklis beberapa data untuk di hapus!');        
        }else{
          Mapel::whereIn("id",$checked)->delete();
          return redirect('mapel')->with('message', 'Data berhasil di hapus!');        
        }
    }
}
