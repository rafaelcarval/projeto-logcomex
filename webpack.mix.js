const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
      // Adicione quaisquer plugins ou configurações do PostCSS aqui
   ]);

mix.alias({
    'vue': 'vue/dist/vue.esm-bundler.js'
});