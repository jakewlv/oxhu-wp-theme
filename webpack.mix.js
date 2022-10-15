let mix = require('laravel-mix');
mix
  // .js("src/js/app.js", "js")
  .js(['src/js/app.js', 'src/js/customizer.js', 'src/js/navigation.js'], 'js')
  .sass('src/sass/app.scss', 'css')
  .sass('src/sass/woocommerce.scss', 'css')
  .sourceMaps(true, 'inline-source-map')
  .webpackConfig({ devtool: 'source-map' })
  .disableSuccessNotifications()
  .setPublicPath('./build')
  .browserSync({
    proxy: 'oxhu.local',
    files: [
      './**/*.php',
      './**/*.js',
      './**/*.scss',
      './**/*.jpg',
      './**/*.png',
      './**/*.svg',
    ] /* Reload if any file with one of these extensions is changed */,
    ignore: ['./.git', './node_modules', './build', './vendor'],
    browser: 'Google Chrome',
  });
