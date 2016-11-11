<?php namespace App\Http\Controllers;

use View;
use App\category;
use App\recipe;


class RecipeController extends Controller {

public function ShowAll() {
    $recipes = Recipe::orderBy('id')->paginate(2);

    return View::make('pages.recipes')
               ->with('recipes', $recipes);
}        
public function ShowBySlug($cat,$slug) {
    $slugs = Recipe::with('categorys')
     ->whereHas('categorys', function($q) use ($cat){
         $q->where('cat', $cat);
     })
     ->where('slug', $slug)
     ->get();
    return View::make('pages.recipes')
               ->with('slugs', $slugs);
}
public function ShowByCategory($cat_id) {
    $cat_ids = Review::with('categorys')->where('cat_id', $cat_id)->orderBy('id')->paginate(3);
  
    return View::make('pages.recipes')
               ->with('cat_ids', $cat_ids);
               
}
}