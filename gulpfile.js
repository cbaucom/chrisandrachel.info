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
    mix.sass('app.scss');
    mix.scripts([
        'libs/sweetalert-dev.js',
        'libs/modal-form.js',
        'libs/bootstrap-checkbox.js',
        'scroll.js',
        'rsvpFormRepeat.js',
        'main.js',
        'libs/cycle.js',
        'libs/maximage.js',
        'libs/jquery.countdown.js'
	], './public/js/all.min.js');
    mix.styles([
            'libs/sweetalert.css'
    ], './public/css/libs.css');
    mix.browserSync({ proxy: 'chrisandrachel.info' });

});
