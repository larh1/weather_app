<?php

use App\Http\Controllers\HomeController;
use App\Services\WeatherService;
use Illuminate\Support\Facades\Route;


// Route::get('/', function ()
// {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "Home"]);
Route::get("/test", function ()
{
    $asd = new WeatherService();
    $asd->Test();
});
