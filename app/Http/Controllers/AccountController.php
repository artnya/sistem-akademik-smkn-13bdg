<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $account = User::all();
        if (Auth()->user()->role == '2') {
            return view('account.index', compact('account'));
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
    public function store(Request $request)
    {
         $this->validate($request, [

            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);

        $storage = new User();
        $storage->name = $request->name;
        $storage->username = $request->username;
        $storage->email = $request->email;
        $storage->role = $request->role;
        $storage->save();

        return redirect('account')->with('message', 'Data berhasil di tambahan');
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
            'username' => 'required',
            'email' => 'required',
            'role' => 'required',

        ]);

        $storage = User::find($id);
        $storage->name = $request->name;
        $storage->username = $request->username;
        $storage->email = $request->email;
        $storage->role = $request->role;
        $storage->save();
        if ($storage->role == '1') {
            $role = 'Siswa';
        }elseif($storage->role == '2')
        {
            $role = 'Administrator';
        }elseif($storage->role == '3')
        {
            $role = 'Guru';
        }else{
            $role = 'Ter-banned';
        }

        return redirect()->back()->with('message', "Akun ". $request->name ." berhasil di verifikasi sebagai ". $role ."");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $account = User::find($id);
        if (Auth()->user()->role == '2') {
            $account->delete();
            return redirect('Account')->with('message', 'Data berhasil di hapus');
        }else{
            return redirect()->back()->with('message', 'Anda tidak boleh memasuki area ini!');
        }
    }

    public function destroychecked(Request $request, $id)
    {
         $checked = $request->input('checked',[]);
        if (Auth()->user()->role == '2') {
            if ($checked == null) {
              return redirect('Account')->with('message', 'Anda belum menceklis beberapa data untuk di hapus!');        
            }else{
              User::whereIn("id",$checked)->delete();
              return redirect('Account')->with('message', 'Data berhasil di hapus!');        
            }
            # code...
        }else{
            return redirect()->back()->with('message', 'Anda tidak di perkenankan masuk ke area ini!');
        }
    }
}
