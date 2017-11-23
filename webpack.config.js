const BrowserSyncPlugin     = require('browser-sync-webpack-plugin');
const path                  = require('path');
const webpack               = require('webpack');
const ExtractTextPlugin     = require('extract-text-webpack-plugin');
const uglifyJSPlugin        = require('uglifyjs-webpack-plugin');
const browserSyncPlugin     = require('browser-sync-webpack-plugin');
const nodeExternals         = require('webpack-node-externals');

module.exports = {
    entry:  './src/js/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, './dist/js')
    },
    target: 'node',
    externals: [nodeExternals()],

    module: {
        rules: [
            {
                test: /\.css$/,
                use: [ 
                    'style-loader',
                    'css-loader',
                    'postcss-loader'
                ]
            },
            {
                test: /\.scss$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use: ['css-loader', 'postcss-loader', 'sass-loader']
                  }),
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
                options: {
                    presets: [['env', {
                        "targets": {
                            "browsers": ["last 2 versions", "safari >= 7"]
                        }
                    }]],
                }
            }
        ]
    },
    plugins: [
        new ExtractTextPlugin('../css/style.css'),
        new BrowserSyncPlugin({
            host: 'localhost',
            port: 80,
            server: { baseDir: ['public'] }
          })
    ]
}