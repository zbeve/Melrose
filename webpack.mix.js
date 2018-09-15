let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

 var node = 'node_modules/';

 /***** MIX ALL PLUGINS SCRIPTS *****/
mix.babel([
    node+'jquery/dist/jquery.min.js',
    node+'bootstrap/dist/js/bootstrap.min.js',
    node+'isotope-layout/dist/isotope.pkgd.min.js',
    node+'imagesloaded/imagesloaded.pkgd.min.js'
 ], 'public/js/plugins.min.js');

mix.js('resources/assets/js/scripts.js', 'public/js/scripts.min.js')
    .sass('resources/assets/sass/app.scss', 'public/css/app.min.css');
