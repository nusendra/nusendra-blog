let mix = require('laravel-mix');

const workboxPlugin = require('workbox-webpack-plugin')
if (mix.inProduction()) {
    mix.webpackConfig({
        plugins: [
            new workboxPlugin.InjectManifest({
                swSrc: 'public/sw-offline.js', // more control over the caching
                swDest: 'service-worker.js', // the service-worker file name
                importsDirectory: 'service-worker' // have a dedicated folder for sw files
            })
        ]
    })
}
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
   .js('resources/assets/js/frontend.js', 'public/js');
