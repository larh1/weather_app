<?php

namespace App\Http\Controllers;

use App\Services\WeatherService;
use Exception;

class SearchController extends Controller
{
    private $service;

    public function __construct()
    {
        $this->service = new WeatherService();
    }

    /**
     * Buscar la ciudad
     * @return View
     */
    public function SearchCity()
    {
        try
        {
            // Obtener ciudad
            $city = request("city");
            // buscar
            $results = $this->service->SearchCities($city);
            return view("search", compact("city", "results"));
        }
        catch (Exception $e)
        {
            return view("error")->with("error", $e->getMessage());
        }
    }

    /**
     * Buscar el clima actual de la ciudad
     * @return View
     */
    public function SearchWeather()
    {
        try
        {
            // Obtener datos del request
            $state = request("state");
            $lat = request("lat");
            $lon = request("lon");
            // Buscar actual
            $current = $this->service->GetGurrentWeatherByCoords($lat, $lon);
            return view("weather", compact("current", "state"));
        }
        catch (Exception $e)
        {
            return view("error")->with("error", $e->getMessage());
        }
    }
}
