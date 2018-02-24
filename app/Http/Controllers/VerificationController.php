<?php

namespace App\Http\Controllers;
use App\Kelas;
use App\User;
use App\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth()->user()->role == '0') {
            $kelas = Kelas::orderBy('id')->get();
            $jurusan = Jurusan::orderBy('id')->get();
            return view('verify', compact('kelas', 'jurusan'));
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


    public function success()
    {

        if (Auth()->user()->role == '5') {
            $kelas = Kelas::orderBy('id')->get();
            $jurusan = Jurusan::orderBy('id')->get();
            return view('success', compact('kelas', 'jurusan'));
        }else{
            return redirect()->route('home')->with('message', 'Akun berhasil di verifikasi oleh admin');
        }
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
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'email' => 'required',
            'id_kelas' => 'required',
            'id_jurusan' => 'required',
            'username' => 'required',
            'role' => 'required'

        ]);

        $storage = User::find($id);
        $storage->email = $request->email;
        $storage->id_kelas = $request->id_kelas;
        $storage->id_jurusan = $request->id_jurusan;
        $storage->username = $request->username;
        $storage->role = $request->role;
        $storage->save();

        return redirect()->route('verification.last.step', Auth()->user()->id)->with('message', 'Verifikasi telah di kirim, mohon tunggu admin mengkonfirmasi akun mu.');
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
