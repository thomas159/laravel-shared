<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class ThingsToDo extends Model
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'thingstodo';

 
    public function categorys()
    {
        return $this->belongsTo('App\Category', 'cat_id');
    }
     public function thingstodoimages()
	  {
    return $this->hasMany('App\Image', 'thingstodo_id');    
    } 
   
}
?>