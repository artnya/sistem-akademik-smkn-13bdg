<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['tingkat_kelas', 'jumlah_kelas', 'nip', 'id_jurusan'];


    public function user()
    {
        return $this->belongsTo('App\User', 'nip', 'id');
    }

    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'id_jurusan', 'id');
    }


    public function rekapnilai()
    {
        return $this->hasMany('App\RekapNilai', 'id');
    }


}
