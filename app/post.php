<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

//hasMany

  public function postimages()
	  {
    return $this->hasMany('App\Image');     
    
}  
}
?>