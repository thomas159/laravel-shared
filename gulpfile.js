var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */


elixir(function(mix) {
    mix.styles([
    'blog.css',
    'contact.css',
    'footer.css',
    'gallery.css',
    'grid.css',
    'header.css',
    'home.css',
    'links.css',
    'normalize.css',
    'reviews.css',
    'styles.css',    
    'vslondon.css', 
    'thingstodo.css',
    'hero-slider.css',
    'mobmenu.css',
    'test.css',
    ], 'public/css/all.css');
});

elixir(function(mix) {
    mix.scripts([
    'hide.js',
    ], 'public/js/all.js');
});