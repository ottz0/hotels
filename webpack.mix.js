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
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
     })
    .version();

mix.browserSync({
    host: '0.0.0.0',
    proxy: 'localhost',
    open: false,
    files: [
            'app/**/*.php',
            'resources/views/**/*.php',
            'packages/mixdinternet/frontend/src/**/*.php',
            'public/js/**/*.js',
            'public/css/**/*.css',
            'resources/views/**/*.html',
            'resources/views/*.html',
            'reources/js/components/*.vue',
            'reources/js/components/**/*.vue',
            'reources/js/*.js',
            'reources/js/**/*.js'
    ],
    watchOptions: {
            usePolling: true,
            interval: 300
    }
});

