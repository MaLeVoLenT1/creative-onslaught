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
mix.browserSync('localhost/creative-onslaught');
mix.setResourceRoot('../');
mix.sass('resources/sass/app.scss', 'public/css');

mix.js('resources/js/pages/home.js', 'public/js/pages/')
    .js('resources/js/pages/admin.js', 'public/js/pages/')
    .js('resources/js/dashboard.js', 'public/js')
    .js('resources/js/app.js', 'public/js')

    //Scripts controls Massive Theme
    .js('resources/js/scripts.js', 'public/js');

mix.scripts([
    'resources/js/lib/visible.js',
    'resources/js/lib/menuzord.js',
    'resources/js/lib/jquery.nav.js',
    'resources/js/lib/wow.min.js',
    'resources/js/lib/owl.carousel.min.js',
    'resources/js/lib/smooth.js',
    'resources/js/lib/bootstrap-filestyle.min.js',
    'resources/js/lib/jquery.ui.touch-punch.mi.js',
    'resources/js/lib/jquery.fixedheadertable.js',
], 'public/js/vendor.js');
