const path = require('path');

module.exports = {
    entry: './dev/js/main.js',
    resolve: {
        extensions: ['.ts', '.tsx', '.js', '.jsx']
    },
    output: {
        path: path.join(__dirname, '/dist'),
        filename: 'bundle.min.js'
    },
    module: {
        rules: [
            {
                test: /\.tsx?$/,
                loader: 'awesome-typescript-loader'
            },
            {
                test: /\.svg$/,
                use: [
                    {
                        loader: 'svg-url-loader',
                        options: {
                            limit: 10000,
                        },
                    },
                ],
            },
            {
                test: /\.css$/i,
                use: ['style-loader', 'css-loader'],
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    // Creates `style` nodes from JS strings
                    'style-loader',
                    // Translates CSS into CommonJS
                    'css-loader',
                    // Compiles Sass to CSS
                    'sass-loader',
                ],
            },
            {
               test: /\.js$/,
               loader: "babel-loader",
               exclude: [/node_modules/, /public/],
               options: {
                 presets: ["@babel/preset-react"],
                 plugins: ["@babel/plugin-proposal-class-properties" ]
              }
            },
           {
             test: /\.jsx$/,
             loader: "babel-loader",
             exclude: [/node_modules/, /public/],
             options: {
               presets: ["@babel/preset-react"],
               plugins: [ "@babel/plugin-syntax-jsx", "@babel/plugin-proposal-class-properties" ]
             }
           },
         ]
       },

}
