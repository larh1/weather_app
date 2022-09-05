<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "Home"]);
Route::get("/search", [SearchController::class, "SearchCity"]);
Route::get("/city", [SearchController::class, "SearchWeather"]);
Route::get("/hour", [SearchController::class, "GetByHour"]);
