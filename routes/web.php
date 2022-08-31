<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Services\WeatherService;
use Illuminate\Support\Facades\Route;


// Route::get('/', function ()
// {
//     return view('welcome');
// });

Route::get("/", [HomeController::class, "Home"]);
Route::get("/search", [SearchController::class, "SearchCity"]);
