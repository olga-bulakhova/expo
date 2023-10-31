const path = require('path');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const isProd = process.env.NODE_ENV === 'production';

module.exports  =  {
    entry: {
        global: ["./src/js/global.js", './src/scss/index.scss']
    },
    output: {
        path: path.resolve(__dirname, './dist'),
        filename: 'js/[name].bundle.js',
    },
    devtool: isProd ? false : 'source-map',
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: ['babel-loader'],
            },
            {
                test: /\.(scss|css)$/,
                use: [MiniCssExtractPlugin.loader, "css-loader", "sass-loader"]
    
          },
            ],
    },

    plugins: [
        new CleanWebpackPlugin(),
        new MiniCssExtractPlugin({
            filename: 'css/[name].bundle.css'
          })
    ],

}

