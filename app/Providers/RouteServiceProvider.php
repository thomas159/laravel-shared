<?php namespace App\Providers;

use View;
use App\post;
use App\image;
use App\linkscategorys;
use App\linksitems;
use App\review;
use App\area;
use App\guide;
use App\thingstodo;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

	/**
	 * This namespace is applied to the controller routes in your routes file.
	 *
	 * In addition, it is set as the URL generator's root namespace.
	 *
	 * @var string
	 */
	protected $namespace = 'App\Http\Controllers';

	/**
	 * Define your route model bindings, pattern filters, etc.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function boot(Router $router)
	{
		parent::boot($router);

/*Home*/
View::composer(array('pages.home'), function($view)
{
  $view->with('posts', Post::orderBy('id')->paginate(3));
});


View::composer(array('partials.home-reviews'), function($view)
{
  $view->with('reviews', Review::take(4)->orderBy('id')->get());
});
View::composer(array('partials.home-vertical'), function($view)
{
  $view->with('reviews', Review::take(4)->orderBy('id')->get());
});
View::composer(array('partials.home-thingstodo'), function($view)
{
  $view->with('thingstodos', ThingsToDo::take(4)->orderBy('id')->get());
});

View::composer(array('partials.home-links'), function($view)
{
  $view->with('linksitems', LinksItems::take(2)->orderBy('id')->get());
});
View::composer(array('partials.home-links'), function($view)
{
  $view->with('linkscategorys', linkscategorys::take(1)->with('LinksItems')->orderBy('id')->get());
});


/*Reviews*/
View::composer(array('partials.reviews-main-img'), function($view)
{
  $view->with('reviews', Review::orderBy('id')->paginate(1));
});

/* Blog */

View::composer(array('partials.photopartial'), function($view)
{
  $view->with('ids', Image::orderBy('id')->get());
});

View::composer(array('partials.photopartial'), function($view)
{
  $view->with('ids', Imagesreview::where('id','$id')->orderBy('id')->get());
});

/* Guides */

View::composer(array('pages.guides'), function($view)
{
  $view->with('areas', Area::with('areaimages')->orderBy('id')->get());
});
View::composer(array('pages.guides'), function($view)
{
  $view->with('guidesslug', Guide::orderBy('id')->get());
});
		//
	}

	/**
	 * Define the routes for the application.
	 *
	 * @param  \Illuminate\Routing\Router  $router
	 * @return void
	 */
	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
