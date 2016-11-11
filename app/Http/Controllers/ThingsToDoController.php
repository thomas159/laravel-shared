<?php namespace App\Http\Controllers;

use View;
use App\category;
use App\thingstodo;


class ThingsToDoController extends Controller {

public function ShowAll() {
    $thingstodos = ThingsToDo::with('categorys')->orderBy('id')->paginate(10);

    return View::make('pages.thingstodo')
               ->with('thingstodos', $thingstodos);
}        
public function ShowByThingsToDoSlug($cat,$thingstodoslug) {
    $thingstodoslugs = ThingsToDo::with('thingstodoimages','categorys')
     ->whereHas('categorys', function($q) use ($cat){
         $q->where('cat', $cat);
     })
     ->where('thingstodoslug', $thingstodoslug)
     ->get();
    return View::make('pages.thingstodo')
               ->with('thingstodoslugs', $thingstodoslugs);
}
}