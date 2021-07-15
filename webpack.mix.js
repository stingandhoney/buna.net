const mix = require('laravel-mix');
const webpack = require('webpack')
const tailwindcss = require('tailwindcss')

mix.webpackConfig ({
    plugins: [
        new webpack.DefinePlugin({
            __VUE_OPTIONS_API__: false,
            __VUE_PROD_DEVTOOLS__: false,
        }),
    ],
})

mix.js('resources/js/app.js', 'public/js').vue()
    .sass('resources/css/app.scss','public/css')
    .options({
        processCssUrls:false,
        postCss: [
            require('postcss-import'),
            tailwindcss('./tailwind.config.js'),
            require('autoprefixer')
]
    }).webpackConfig(require('./webpack.config'));
