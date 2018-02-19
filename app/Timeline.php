<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Timeline extends Model
{
    protected $table = 'timeline';
    protected $primarykey = 'id';
    protected $fillable = ['id_user', 'post', 'read_at','shared_user', 'shared_desc'];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_user', 'id');
    }

	public function comments()
	{
	  return $this->hasMany('App\Comment', 'id');
	}

}
