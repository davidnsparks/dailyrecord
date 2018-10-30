const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');
const OptimizeCssAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const webpack = require('webpack');

const config = {

 


  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: "babel-loader"
        }
      },

      {
      test: /\.woff(\?v=\d+\.\d+\.\d+)?$/,
      loader: "url-loader?limit=10000&mimetype=application/font-woff",

    }, {
      test: /\.woff2(\?v=\d+\.\d+\.\d+)?$/,
      loader: "url-loader?limit=10000&mimetype=application/font-woff"
    }, {
      test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/,
      loader: "url-loader?limit=10000&mimetype=application/octet-stream"
    }, {
      test: /\.eot(\?v=\d+\.\d+\.\d+)?$/,
      loader: "file-loader"
    }, {
      test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,
      loader: "url-loader?limit=10000&mimetype=image/svg+xml"
    },

 
        {
    test: /\.(scss|css)$/,
    use: [
        MiniCssExtractPlugin.loader,
        {
            loader: "css-loader",
            options: {
                minimize: {
                    safe: true
                }
            }
        },
       

        {
            loader: "sass-loader",
            options: {}
        },
{
        loader: "postcss-loader",
        options: {sourceMap: true}
      }
    ]
},

    ]
  },

  plugins: [
   // new ExtractTextPlugin('../css/style.css'),
    new UglifyJsPlugin({uglifyOptions: {comments: false,  output: {
        comments: false,
        beautify: false,
      
      },}}),
    
      new webpack.ProvidePlugin({
   $: "jquery",
   jQuery: "jquery",
   "Tether": 'tether',
   "Popper": 'popper.js'
  }),
       new MiniCssExtractPlugin({
      filename: "/assets/css/[name].css",
      chunkFilename: "[id].css"
    }),
        new OptimizeCssAssetsPlugin({
      assetNameRegExp: /\.optimize\.css$/g,
      cssProcessorOptions: { discardComments: { removeAll: true } },
      canPrint: true
    })
  ]
};

module.exports = config;