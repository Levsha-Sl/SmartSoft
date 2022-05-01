const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    <!-- Font Awesome -->
    'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
    <!-- Select2 -->
    'resources/assets/admin/plugins/select2/css/select2.min.css',
    'resources/assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css',
    <!-- Theme style -->
    'resources/assets/admin/css/adminlte.min.css',
], 'public/assets/admin/css/admin.css');

mix.scripts([
    <!-- jQuery -->
    'resources/assets/admin/plugins/jquery/jquery.min.js',
    <!-- Bootstrap 4 -->
    'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
    <!-- Select2 -->
    'resources/assets/admin/plugins/select2/js/select2.full.min.js',
    <!-- AdminLTE App -->
    'resources/assets/admin/js/adminlte.min.js',
    <!-- AdminLTE for demo purposes -->
    'resources/assets/admin/js/demo.js',
], 'public/assets/admin/js/admin.js');

mix.copyDirectory('resources/assets/admin/img', 'public/assets/admin/img');
mix.copyDirectory('resources/assets/admin/plugins/fontawesome-free/webfonts', 'public/assets/admin/webfonts');

mix.copy('resources/assets/admin/css/adminlte.min.css.map', 'public/assets/admin/css/adminlte.min.css.map');
