let mix = require('laravel-mix');
let bootstrap = require('bootstrap-styl');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .stylus('resources/assets/stylus/app.styl', 'public/css', {use: [ bootstrap() ] })
    .extract(['jquery','bootstrap'])
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery'],
    });

mix.webpackConfig({
   plugins: [
       new BrowserSyncPlugin({
           files: [
               'app/**/*',
               'public/**/*',
               'resources/views/**/*',
               'routes/**/*'
           ]
       })
   ]
});
