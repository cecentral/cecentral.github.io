const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

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

// elixir(mix => {

elixir(function(mix) {

    mix.sass('app.scss');
    // mix.sass('navigation.scss');
    //
    // mix.styles('style.css');
    // mix.styles('reset.css');

    mix.scripts('app.js');
    // mix.scripts('bootstrap.js');
    // mix.scripts('jquery-2.1.1.js');
    // mix.scripts('main.js');
    // mix.scripts('modernizr.js');

    mix.webpack('app.js');

    mix.version([
        'css/app.css',
        // 'css/navigation.css',
        // 'css/style.css',
        // 'css/reset.css',
        'js/app.js'//,
        // 'js/bootstrap.js',
        // 'js/jquery-2.1.1.js',
        // 'js/main.js',
        // 'js/modernizr.js'
    ]);

});
