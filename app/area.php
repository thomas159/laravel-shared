<?php namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Area extends Model
{
    // does nothing more than 
    // specify the table in the database
    protected $table = 'areas';

 public function areaimages()
	  {
    return $this->hasMany('App\Image', 'area_id');    
    }   
    
}
?>