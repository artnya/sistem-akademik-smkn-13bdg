<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekapNilai extends Model
{
    protected $table = 'rekap_nilai';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['id_siswa', 'id_mapel', 'id_jurusan', 'id_kelas', 'semester', 'id_tahun', 'tugas1', 'tugas2', 'tugas3', 'nilai_sikap', 'nilai_pengetahuan', 'uts', 'uas'];


    public function user()
    {
        return $this->belongsTo('App\User', 'id_siswa', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo('App\Kelas', 'id_kelas', 'id');
    }


    public function mapel()
    {
        return $this->belongsTo('App\Mapel', 'id_mapel', 'id');
    }


    public function tahun()
    {
        return $this->belongsTo('App\Tahun', 'id_tahun', 'id');
    }


    public function jurusan()
    {
        return $this->belongsTo('App\Jurusan', 'id_jurusan', 'id');
    }

}
