<?php
// Home
Route::get('/', 'HomeController@ShowAll');
Route::get('test', 'TestController@ShowAll');
// Links
Route::get('links', 'LinkController@ShowAll');
// Route for blog
Route::get('blog', 'PostController@ShowByMonth');
Route::get('blog', 'PostController@ShowAll');
Route::get('blog/month/{month}', ['as' => 'post.month', 'uses' => 'PostController@ShowbyMonth']); 
Route::get('blog/{postslug}', ['as' => 'post.postslug', 'uses' => 'PostController@ShowbyPostSlug']); 
// Route for reviews
Route::get('reviews', 'ReviewController@ShowAll');
Route::get('reviews/{cat}/{slug}', ['as' => 'reviews.slug', 'uses' => 'ReviewController@ShowbySlug']); 
Route::get('reviews/category/{cat_id}', ['as' => 'reviews.category', 'uses' => 'ReviewController@ShowbyCategory']); 
// Route for recipes
Route::get('recipes', 'RecipeController@ShowAll');
Route::get('recipes/{cat}/{slug}', ['as' => 'recipes.slug', 'uses' => 'RecipeController@ShowbySlug']); 
Route::get('recipes/category/{cat_id}', ['as' => 'recipes.category', 'uses' => 'RecipeController@ShowbyCategory']); 
// Route for gallery
Route::get('gallery', 'GalleryController@ShowAll');
Route::get('gallery/{galleryslug}', ['as' => 'gallery.galleryslug', 'uses' => 'GalleryController@ShowByGallerySlug']); 
// Route for thingstodo
Route::get('thingstodo', 'ThingsToDoController@ShowAll');
Route::get('thingstodo/{cat}/{thingstodoslug}', ['as' => 'thingstodo.thingstodoslug', 'uses' => 'ThingsToDoController@ShowByThingsToDoSlug']); 
// Route for Guides
Route::get('guides', 'GuidesController@ShowAll');
Route::get('guides/{guidesslug}', ['as' => 'guides.guidesslug', 'uses' => 'GuidesController@ShowByGuidesSlug']); 

// Route for Contact
//Route::get('contact', function()
//{ return View::make('pages.contact'); });
Route::get('contact', 
  ['as' => 'contact', 'uses' => 'AboutController@create']);
Route::post('contact', 
  ['as' => 'contact_store', 'uses' => 'AboutController@store']);

//Route::post('contact', function()
//{ 
    //handle ur request here
//});
// News 

Route::get('news', function()
{
	return View::make('pages.news');
});
Route::get('test', function()
{
	return View::make('pages.test');
});
Route::get('test2', function()
{
	return View::make('pages.test2');
});
Route::get('test3', function()
{
	return View::make('pages.test3');
});
Route::get('vslondon', function()
{
	return View::make('pages.vslondon');
});