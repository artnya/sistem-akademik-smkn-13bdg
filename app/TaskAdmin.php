<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskAdmin extends Model
{
    protected $table = 'task';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $fillable = ['id', 'user_id', 'admin_id', 'reason', 'read_at', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
