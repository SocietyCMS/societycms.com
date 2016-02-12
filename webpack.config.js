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
        new BrowserSyncPlugin({
            // browse to http://localhost:3000/ during development,
            // ./public directory is being served
            proxy: 'societycms.tinker'
        })
    ]
};
