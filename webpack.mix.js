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

mix.js(['resources/js/app.js',
        'bootstrap/JS/slick.min.js'], 'public/js')
    .styles([
        'bootstrap/CSS/bootstrap.min.css',        
        'bootstrap/CSS/slick.min.css',
        'bootstrap/CSS/slick-theme.min.css',
        'bootstrap/CSS/animate.min.css',
        'bootstrap/CSS/Personalizado.min.css'
    ], 'public/css/app.css');