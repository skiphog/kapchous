let mix = require('laravel-mix');

mix.js('assets/js/app.js', 'c:\\OSPanel\\domains\\kapchous\\public\\js\\')
.sass('assets/sass/app.scss', 'public/css');