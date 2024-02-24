let mix = require('laravel-mix');
let path = require('path');

mix.setResourceRoot('../');
mix.setPublicPath(path.resolve('./'));

mix.webpackConfig({
    watchOptions: { ignored: [
        path.posix.resolve(__dirname, './css'),
        path.posix.resolve(__dirname, './js'),
        path.posix.resolve(__dirname, './node_modules')
    ] }
});

/**
 * These resources are in use by @thetheme.
 */
mix.js("src/js/app.js", "js");
mix.postCss("src/css/app.css", "css");
mix.postCss("src/css/wp-login.css", "css");
mix.postCss("src/css/wp-editor-style.css", "css");
