<?php namespace App\Http\Controllers;

use View;
use App\post;
use App\map;

class PostController extends Controller {

protected $layout = 'layouts.default';

public function ShowAll() {
       $posts = Post::orderBy('id')->paginate(4);
   return View::make('pages.blog')->with('posts', $posts);
}
public function ShowByPostSlug($postslug) {
      $postslugs = Post::with('postimages')->where('postslug', $postslug)->get();
   return View::make('pages.blog')->with('postslugs', $postslugs);
}
public function ShowByMonth($month) {
    $months = Post::where('month', $month)->orderBy('id')->paginate(3);
    return View::make('pages.blog') ->with('months', $months);

}
}