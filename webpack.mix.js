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
    .js('resources/js/work01/work01.js', 'public/js')
    .js('resources/js/work02/work02.js', 'public/js')
    .sass('resources/sass/work02.scss', 'public/css')
    .sass('resources/sass/work01.scss', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: {
            target: "http://localhost:8000",
        },
        files: [
             'resources/**/*',
             'resources/**/**/*',
             'app/**/*',
             'config/**/*',
             'routes/**/*',
             'public/**/*'
            


        ],
    })
    .sourceMaps()
    .autoload({
    "jquery": ['$', 'window.jQuery']
    });