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

mix.styles([
    'resources/views/front/assets/css/animate.css',
    'resources/views/front/assets/css/icomoon.css',
    'resources/views/front/assets/css/bootstrap.css',
    'resources/views/front/assets/css/magnific-popup.css',
    'resources/views/front/assets/css/owl.carousel.min.css',
    'resources/views/front/assets/css/owl.theme.default.min.css'
], 'public/front/asset/css/vendor.css')

    .scripts([
        'resources/views/front/assets/js/modernizr-2.6.2.min.js'
    ], 'public/front/asset/js/modernizr.js')

    .scripts([
        'resources/views/front/assets/js/respond.min.js'
    ], 'public/front/asset/js/respond.min.js')

    .scripts([
        'resources/views/front/assets/js/jquery.min.js',
        'resources/views/front/assets/js/jquery.easing.1.3.js',
        'resources/views/front/assets/js/bootstrap.min.js',
        'resources/views/front/assets/js/jquery.waypoints.min.js',
        'resources/views/front/assets/js/jquery.stellar.min.js',
        'resources/views/front/assets/js/owl.carousel.min.js',
        'resources/views/front/assets/js/jquery.countTo.js',
        'resources/views/front/assets/js/jquery.magnific-popup.min.js',
        'resources/views/front/assets/js/magnific-popup-options.js',
    ], 'public/front/asset/js/vendor.js')

    .scripts([
        'resources/views/front/assets/js/main.js'
    ], 'public/front/asset/js/main.js');
