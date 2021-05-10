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

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/package/owl.js', 'public/js/package')
    .js('resources/js/package/chart.js', 'public/js/package')
    .js('resources/js/package/date-fns.js', 'public/js/package')
    .js('resources/js/front/front.js', 'public/js/front')
    .js('resources/js/front/profileChart.js', 'public/js/front')
    .js('resources/js/admin/index.js','public/js/admin')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/front/front.scss', 'public/css/front')
    .sass('resources/sass/front/media.scss', 'public/css/front')
    .sass('resources/sass/owl.scss', 'public/css/package')
    .sass('resources/sass/admin.scss','public/css/admin')
    .copy('resources/fonts/*', 'public/fonts');
