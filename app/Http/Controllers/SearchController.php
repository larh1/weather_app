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
            $show_state = $state == "-";
            // Buscar actual
            $current = $this->service->GetGurrentWeatherByCoords($lat, $lon);
            // Algunos resultados no tienen estado
            $state = $state == "-" ? $state = $current["name"] :
                $state = $current["name"] . ", " . $state;
            return view("weather", compact("current", "state", "show_state", "lat", "lon"));
        }
        catch (Exception $e)
        {
            return view("error")->with("error", $e->getMessage());
        }
    }

    /**
     * Buscar el clima de los 5 dias, cada 3 horas
     * 
     */
    public function GetByHour()
    {
        try
        {
            // Obtener datos del request
            $state = request("state");
            $lat = request("lat");
            $lon = request("lon");
            // Buscar actual
            $current = $this->service->Get5D3HWeatherByCoords($lat, $lon);
            return response()->json($current);
        }
        catch (Exception $e)
        {
            return view("error")->with("error", $e->getMessage());
        }
    }
}
