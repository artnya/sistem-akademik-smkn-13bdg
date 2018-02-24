<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tahun extends Model
{
    protected $table = 'tahun_ajaran';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['tahun', 'sekarang'];

    public function rekapnilai()
    {
        return $this->hasMany('App\RekapNilai');
    }

}
