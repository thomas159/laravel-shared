<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Review extends Model
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'reviews';

 
    public function categorys()
    {
        return $this->belongsTo('App\Category', 'cat_id');
    }
    public function reviewimages()
	  {
    return $this->hasMany('App\Image', 'review_id');    
    } 
}
?>