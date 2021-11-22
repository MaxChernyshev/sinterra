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


// FRONT
mix.js('resources/js/front/app.js', 'public/js/front/js')
    .sass('resources/sass/front/app.scss', 'public/css/front/css')
    .sourceMaps();


// ADMIN
mix.js([
        'resources/js/admin/app.js',
        // '~plugins/jquery/jquery.min.js',
        // '~plugins/bootstrap/js/bootstrap.bundle.min.js',
        // '~dist/js/adminlte.min.js',
    ], 'public/js/admin/js')
    .sass('resources/sass/admin/app.scss', 'public/css/admin/css')
    .sourceMaps();


