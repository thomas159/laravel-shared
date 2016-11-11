<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Recipe extends Model
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'reviews';

     
    public function categorys()
    {
        return $this->belongsTo('App\Category', 'cat_id');
    }
   
}
?>