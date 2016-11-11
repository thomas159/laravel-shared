<?php namespace App\Http\Controllers;

use View;
use App\category;
use App\review;


class ReviewController extends Controller {

public function ShowAll() {
    $reviews = Review::with('categorys')->orderBy('id')->paginate(10);

    return View::make('pages.reviews')
               ->with('reviews', $reviews);
}        
public function ShowBySlug($cat,$slug) {
    $slugs = Review::with('reviewimages','categorys')
     ->whereHas('categorys', function($q) use ($cat){
         $q->where('cat', $cat);
     })
     ->where('slug', $slug)
     ->get();
    return View::make('pages.reviews')
               ->with('slugs', $slugs);
}
}