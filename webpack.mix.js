const mix = require('laravel-mix');
mix.js('ressources/app/js/app.js', 'public/js')
    .sass()
    .version();