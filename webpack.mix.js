const mix = require("laravel-mix");
mix
    .styles(
        ["resources/css/app.css","resources/css/toast.css"],
        "public/css/app.css");