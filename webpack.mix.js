const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
   .js('resources/js/bootstrap.js', 'public/js/boot.js')
   .sass('resources/sass/app.scss', 'public/css')
   .options({
     processCssUrls: false,
     postCss: [ tailwindcss('./tailwind.config.js') ],
   });

// version does not work in hmr mode
if (process.env.npm_lifecycle_event !== 'hot') {
  mix.version()
}
const path = require('path');
// fix css files 404 issue
mix.webpackConfig({
  devServer: {
    contentBase: path.resolve(__dirname, 'public'),
  }
});
