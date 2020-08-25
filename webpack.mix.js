const mix = require('laravel-mix');

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

//mix.js('resources/js/app.js', 'public/js')
//    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/vendor/fontawesome-free/css/all.css',
    'public/vendor/fontawesome-free/css/all.min.css',
    'public/css/sb-admin-2.min.css'
], 'public/css/all.css');

mix.scripts([
    'public/vendor/jquery/jquery.min.js',
    'public/vendor/bootstrap/js/bootstrap.bundle.min.js',
    'public/vendor/jquery-easing/jquery.easing.min.js',
    'public/js/sb-admin-2.min.js',
    'public/vendor/chart.js/Chart.min.js',
    'public/js/demo/chart-area-demo.js',
    'public/js/demo/chart-pie-demo.js'
], 'public/js/all.js');
    

