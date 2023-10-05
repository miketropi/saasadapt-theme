const mix = require('laravel-mix');

mix
  .js('./src/main.js', './dist/saasadapt-theme.bundle.js')
  .sass('./src/scss/main.scss', 'css/saasadapt-theme.bundle.css')
  .setPublicPath('dist')