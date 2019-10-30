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
mix.browserSync('localhost/CO/public');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.scripts([
    'resources/assets/js/lib/visible.js',
    'resources/assets/js/lib/menuzord.js',
    'resources/assets/js/lib/jquery.nav.js',
    'resources/assets/js/lib/wow.min.js',
    'resources/assets/js/lib/owl.carousel.min.js',
    'resources/assets/js/lib/smooth.js',
    'resources/assets/js/lib/bootstrap-filestyle.min.js',
    'resources/assets/js/lib/jquery.ui.touch-punch.mi.js',
    'resources/assets/js/lib/jquery.fixedheadertable.js',
], 'public/js/vendor.js');
