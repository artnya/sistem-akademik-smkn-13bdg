<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['nama_mapel', 'type_mapel', 'kkm', 'id_jurusan'];

    public function user()
    {
        return $this->hasMany('App\User', 'id');
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
