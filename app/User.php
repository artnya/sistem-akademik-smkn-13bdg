<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function routeNotificationForNexmo()
    {
        return $this->phone;
    }
    
    protected $fillable = ['id',
        'name', 'email', 'password', 'role', 'id_kelas', 'id_jurusan', 'username', 'tmp_lahir', 'tgl_lahir', 'agama', 'goldar', 'alamat', 'nama_ortu', 'pekerjaan_ortu', 'jenis_kelamin', 'nip', 'photo' , 'id_mapel',  
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = true;

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'id_jurusan', 'id');
    }


    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas', 'id');
    }

    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'id_mapel', 'id');
    }

    public function timeline()
    {
        return $this->hasMany('App\Timeline', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment','id');
    }

    public function rekapnilai()
    {
        return $this->hasMany('App\RekapNilai', 'id');
    }

    public function task()
    {
        return $this->hasMany('App\TaskAdmin', 'id');
    }


}
