const mix = require("laravel-mix");

mix.copyDirectory("resources/assets/fonts", "public/assets/fonts")
    .copyDirectory("resources/assets/images", "public/assets/images")
    .copyDirectory("resources/assets/js", "public/assets/js")
    .sass("resources/assets/scss/app.scss", "public/assets/css/dashlite.css");
