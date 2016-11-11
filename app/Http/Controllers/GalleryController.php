<?php namespace App\Http\Controllers;

use View;
use App\image;
use App\album;

class GalleryController extends Controller {

protected $layout = 'layouts.default';


public function ShowAll() {
    $albums = Album::with('images')->orderBy('id')->get();
  return View::make('pages.gallery')->with('albums', $albums);
}
public function ShowByGallerySlug($galleryslug) {
      $galleryslugs = Album::with('images')->where('galleryslug', $galleryslug)->get();
   		return View::make('pages.gallery')->
  		 with('galleryslugs', $galleryslugs);
}
}