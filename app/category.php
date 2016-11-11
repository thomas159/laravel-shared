<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model 
{
    protected $table = 'categorys';

  public function catreviews()
    {
        return $this->hasMany('App\review');
    }
  public function catthingstodo()
    {
        return $this->hasMany('App\thingstodo');
    }
}
?>