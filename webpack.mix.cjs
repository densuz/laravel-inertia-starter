
const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        // Additional PostCSS plugins can be added here
    ])
    .vue({ version: 3 });

// Export mix instance if needed
module.exports = mix;
