var autoprefixer = require('autoprefixer');
var precss       = require('precss');
var webpack = require('webpack');
var path = require('path');

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
            {
                test: /\.scss$/,
                loader: 'style!css!sass!postcss'
            },
            {
                test: /\.css$/,
                loader: "style!css!postcss"
            },
            {
                test: /\.(jpe?g|png|gif|svg)$/i,
                loaders: [
                    'file?hash=sha512&digest=hex&name=[hash].[ext]',
                    'image-webpack?bypassOnDebug&optimizationLevel=7&interlaced=false!url-loader?limit=100000'
                ]
            },
            {
                test: /.(woff(2)?|eot|svg|ttf)(\?[a-z0-9=\.]+)?$/,
                loader: 'url-loader?limit=100000'
            }
        ]
    },
    postcss: function () {
        return [autoprefixer, precss];
    },
    plugins: [
        new webpack.HotModuleReplacementPlugin(),
        new webpack.NoErrorsPlugin()
    ]
};
