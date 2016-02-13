var BrowserSyncPlugin = require('browser-sync-webpack-plugin');
var autoprefixer = require('autoprefixer');
var precss = require('precss');


module.exports = {
    context: __dirname + '/resources/assets',
    entry: [
        './app.js'
    ],

    output: {
        path: __dirname + '/public/resources',
        filename: "bundle.js",
        publicPath: '/resources/'
    },

    module: {
        loaders: [
            {test: /\.scss$/, loader: 'style!css!sass!postcss'},
            {test: /\.less/, loader: 'style!css!less!postcss'},
            {test: /\.css$/, loader: "style!css!postcss"},

            {test: /\.png$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},
            {test: /\.jpg$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},
            {test: /\.gif$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},
            {test: /\.svg$/, loader: 'url', query: { limit: 25000, prefix: 'img/', name: '[name].[ext]?[hash]'}},

            {test: /\.(woff(2)?)(\?[a-z0-9=\.]+)?$/, loader: 'url', query: { limit: 25000, prefix: 'font/', name: '[name].[ext]?[hash]'}},
            {test: /\.(eot)(\?[a-z0-9=\.]+)?$/, loader: 'file', query: { prefix: 'font/', name: '[name].[ext]?[hash]'}},
            {test: /\.(ttf)(\?[a-z0-9=\.]+)?$/, loader: 'file', query: { prefix: 'font/', name: '[name].[ext]?[hash]'}},
            {test: /\.(svg)(\?[a-z0-9=\.]+)?$/, loader: 'file', query: { prefix: 'font/', name: '[name].[ext]?[hash]'}}
        ]
    },
    postcss: function () {
        return [autoprefixer, precss];
    },
    plugins: [
        new BrowserSyncPlugin({
            // browse to http://localhost:3000/ during development,
            // ./public directory is being served
            proxy: 'societycms.tinker'
        })
    ]
};
