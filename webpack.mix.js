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

mix.options({processCssUrls: false})
    .js('resources/js/app.js', 'public/js').minify('public/js/app.js')
    .js('resources/js/index.js', 'public/js').minify('public/js/index.js')
    .js('resources/js/plugins.js', 'public/js').minify('public/js/plugins.js')
    .sass('resources/sass/app.scss', 'public/css').minify('public/css/app.css');
