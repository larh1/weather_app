const mix = require("laravel-mix");
mix
    .styles(
        ["resources/css/app.css","resources/css/toast.css"],
        "public/css/app.css")
    .js(["resources/js/toast.js"],"public/js/app.js");