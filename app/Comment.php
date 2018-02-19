<?php
 
namespace App;
 
use Illuminate\Database\Eloquent\Model;

 
class Comment extends Model
{
  // fields can be filled
  protected $table = 'comments';
  protected $primaryKey = 'id';
  protected $fillable = ['body', 'post_id', 'user_id'];
 
  public function timeline()
  {
    return $this->belongsTo('App\Timeline', 'post_id', 'id');
  }
 
  public function user()
  {
    return $this->belongsTo('App\User', 'user_id', 'id');
  }
  
}
