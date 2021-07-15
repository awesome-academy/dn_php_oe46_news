const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .styles(['resources/css/bootstrap-grid.css','resources/css/bootstrap-grid.css.map','resources/css/bootstrap-reboot.css',
    'resources/css/bootstrap-grid.min.css','resources/css/bootstrap-grid.min.css.map','resources/css/bootstrap-reboot.css.map',
    'resources/css/bootstrap-reboot.min.css','resources/css/bootstrap-reboot.min.css.map','resources/css/bootstrap.css','resources/css/bootstrap.css.map',
    'resources/css/coming-soon.css','resources/css/login.css','resources/css/pricing-tables.css','resources/css/style.css','resources/css/timeline.css',
    'resources/css/all.css','resources/css/all.min.css','resources/css/brands.css','resources/css/fontawesome.css','resources/css/fontawesome.min.css',
    'resources/css/regular.css','resources/css/regular.min.css','resources/css/solid.css','resources/css/solid.min.css','resources/css/svg-with-js.css',
    'resources/css/svg-with-js.min.css','resources/css/v4-shims.css','resources/css/v4-shims.min.css'],'public/css/lib.css')
    .copy( ['resources/images'], 'public/images', false )
    .copy( ['resources/webfonts'], 'public/webfonts', false )
    .js('resources/js/admin.js','public/js/admin.js')
    .js('resources/js/app.js','public/js/app.js')
    .js('resources/js/bootstrap copy.js','public/js/bootstrap copy.js')
    .js('resources/js/bootstrap.bundle.js','public/js/bootstrap.bundle.js')
    .js('resources/js/bootstrap.bundle.js.map','public/js/bootstrap.bundle.js.map')
    .js('resources/js/bootstrap.bundle.min.js','public/js/bootstrap.bundle.min.js')
    .js('resources/js/bootstrap.bundle.min.js.map','public/js/bootstrap.bundle.min.js.map')
    .js('resources/js/bootstrap.js','public/js/bootstrap.js')
    .js('resources/js/bootstrap.js.map','public/js/bootstrap.js.map')
    .js('resources/js/bootstrap.min.js','public/js/bootstrap.min.js')
    .js('resources/js/bootstrap.min.js.map','public/js/bootstrap.min.js.map')
    .js('resources/js/countdown.js','public/js/countdown.js')
    .js('resources/js/detect.js','public/js/detect.js')
    .js('resources/js/fastclick.js','public/js/fastclick.js')
    .js('resources/js/jquery-1.10.2.min.js','public/js/jquery-1.10.2.min.js')
    .js('resources/js/jquery-ui.min.js','public/js/jquery-ui.min.js')
    .js('resources/js/jquery.blockUI.js','public/js/jquery.blockUI.js')
    .js('resources/js/jquery.min.js','public/js/jquery.min.js')
    .js('resources/js/jquery.nicescroll.js','public/js/jquery.nicescroll.js')
    .js('resources/js/jquery.scrollTo.min.js','public/js/jquery.scrollTo.min.js')
    .js('resources/js/jquery.slimscroll.js','public/js/jquery.slimscroll.js')
    .js('resources/js/jquery.validate.min.js','public/js/jquery.validate.min.js')
    .js('resources/js/modernizr.min.js','public/js/modernizr.min.js')
    .js('resources/js/moment.min.js','public/js/moment.min.js')
    .js('resources/js/popper.min.js','public/js/popper.min.js')
    .js('resources/js/popper.min.js.map','public/js/popper.min.js.map')
    .js('resources/js/tether.min.js','public/js/tether.min.js')
    .js('resources/js/transition.js','public/js/transition.js');