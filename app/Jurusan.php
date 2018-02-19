<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan';
    protected $primaryKey = 'id';
    protected $fillable = ['nama_jurusan', 'type_jurusan'];


    public function user()
    {
        return $this->hasMany('App\User', 'id');
    }

    public function kelas()
    {
        return $this->hasMany('App\Kelas', 'id');
    }

    public function mapel()
    {
        return $this->hasMany('App\Mapel', 'id');
    }

    public function rekapnilai()
    {
        return $this->hasMany('App\RekapNilai', 'id');
    }

}
