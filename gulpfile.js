var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application.
 |
 */

elixir(function(mix) {
    mix
        .copy('vendor/fortawesome/font-awesome/fonts', 'public/fonts')
        .sass('all.scss')
        .sass([
            'all.scss'
            ], 'public/css/all.css', 'resources/assets/sass')

        .scripts([
                    'materialize/bin/materialize.min.js',
                    'plugins.js',
                    'main.js'
                ], 'public/js/all.js', 'resources/assets/js')

        .version(["css/all.css", "js/all.js"])

});
