const mix = require('laravel-mix');

const devPath = 'resources';

mix.disableNotifications();

mix.setPublicPath('public');

mix
  .postCss(`${devPath}/css/normalize.css`, 'css' )
  .postCss(`${devPath}/css/style.css`, 'css' )
  .options({
    postCss: [ require( 'tailwindcss' ) ],
    processCssUrls: false
  });

/*
 * Add custom Webpack configuration.
 *
 * @link https://laravel.com/docs/5.8/mix#custom-webpack-configuration
 * @link https://webpack.js.org/configuration/
 */
mix.webpackConfig( {
  devtool      : mix.inProduction() ? false : 'source-map',
  performance  : { hints  : false },
  watchOptions : { ignored: /node_modeuls/, }
} );
