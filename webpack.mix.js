const path = require('path')
const mix = require('laravel-mix');
require('laravel-mix-purgecss');

const devPath = 'resources';

mix.disableNotifications();

mix.setPublicPath('public');

mix
  .postCss(`${devPath}/css/normalize.css`, 'css' )
  .postCss(`${devPath}/css/style.css`, 'css' )
  .options({
    postCss: [ require( 'tailwindcss' ) ],
    processCssUrls: false
  })
  .purgeCss({
    globs             : [ path.join(__dirname, './**/*.php') ],
    extensions        : ['php'],
    only              : ['css/style.css'],
    whitelist         : ['screen-reader-text', 'logo'],
    whitelistPatterns : [/wp-block.*/],
    whitelistPatternsChildren: [/^entry-content$/, /^navigation$/ ]
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
