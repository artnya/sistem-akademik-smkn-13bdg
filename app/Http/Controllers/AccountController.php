<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Redirect;
use Validator;
use Illuminate\Support\Facades\Input;
use Hash;
use App\Notifications\AcceptedVerification;
use Notification;
use Excel;

class AccountController extends Controller
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
            $account = User::orderBy('name', 'DESC')->paginate(15);
            return view('account.index', compact('account'));
        
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
        // save the user to the database
        $credentials = Input::only('id', 'email', 'password','name', 'username', 'role');
        $credentials['password'] = Hash::make($credentials['password']);
        $user = User::create($credentials);
        // return a view 
        return redirect()->back()->with('message', 'Akun berhasil di tambahkan');
        
    }

    public function importSiswa(Request $request)
    {
         if($request->hasFile('imported-file'))
      {
                $path = $request->file('imported-file')->getRealPath();
                $data = Excel::load($path, function($reader)
                {
                    $reader->select(array('username', 'password','name','id_kelas','id_jurusan', 'jenis_kelamin','role'));

                })->get();
            foreach ($data->toArray() as $row)
            {
              if(!empty($row))
              {
                $user[] =
                [
                  'id' => $row['username'],
                  'username' => $row['username'],
                  // max hashing an account is 150 row
                  'password' => bcrypt($row['password']),
                  'name' => $row['name'],
                  'id_kelas' => $row['id_kelas'],
                  'id_jurusan' => $row['id_jurusan'],
                  'jenis_kelamin' => $row['jenis_kelamin'],
                  'role' => $row['role']
                ];
              }
          }
          if(!empty($user))
          {
                 User::insert($user);
                 return back()->with('message', 'Import berhasil!');   
           }
       }
    }

    public function importGuru(Request $request)
    {
         if($request->hasFile('imported-file-guru'))
      {
                $path = $request->file('imported-file-guru')->getRealPath();
                $data = Excel::load($path, function($reader)
                {
                    $reader->select(array('id', 'nip','username', 'password','name','tmp_lahir','tgl_lahir', 'jenis_kelamin', 'role'));

                })->get();
            foreach ($data->toArray() as $row)
            {
              if(!empty($row))
              {
                $user[] =
                [
                  'id' => rand(),
                  'nip' => $row['username'],
                  'username' => $row['username'],
                  // max hashing an account is 150 row
                  'password' => Hash::make($row['password']),
                  'name' => $row['name'],
                  'tmp_lahir' => $row['tmp_lahir'],
                  'tgl_lahir' => $row['tgl_lahir'],
                  'jenis_kelamin' => $row['jenis_kelamin'],
                  'role' => $row['role']

                ];
              }
          }
          if(!empty($user))
          {
                 User::insert($user);
                 return back()->with('message', 'Import berhasil!');   
           }
       }

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
            $role = 'terbanned/blokir';
        }

        if($storage->role =='4')
        {
        return redirect()->back()->with('message', "Anda telah berhasil memblokir akun ". $request->name .". Akun tidak dapat di akses selama prosedur ini berlangsung.");
        }else
        {

        $users = User::find($id);
        Notification::send($users, new AcceptedVerification($users));
        return redirect()->back()->with('message', "Akun ". $request->name ." berhasil di verifikasi sebagai akun ". $role .".");
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
        
        $hapus = User::destroy($request->checked); 
        return back()->with('message', 'Account berhasil di hapus!');
    }
}
