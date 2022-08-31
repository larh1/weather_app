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
}
