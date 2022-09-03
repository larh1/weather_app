<?php

namespace App\Services;

use App\Http\Controllers\Helpers\Utilidades;
use App\Traits\AuhotizeRequest;
use App\Traits\HttpTrait;
use App\Traits\InteractWithResponse;
use Exception;

class WeatherService
{
    use HttpTrait, InteractWithResponse, AuhotizeRequest;

    /**
     * URL Base
     */
    protected $BASE_URL;

    /**
     * Toke de la API
     */
    protected $API_KEY;

    public function __construct()
    {
        $this->BASE_URL = config("services.weather.base_uri");
        $this->API_KEY = config("services.weather.api_key");
    }

    /**
     * Buscar las ciudades que coinciden con el nombre ingresado
     * @param $search string Ciudad a buscar
     * @return Response
     */
    public function SearchCities($search)
    {
        $res = $this->MakeRequest(
            "GET",
            "geo/1.0/direct",
            [
                "q" => $search,
                "limit" => 20
            ]
        );
        return $res;
    }

    /**
     * Obtener el clima de las coordenadas ingresadas
     * @param $lat string Latidud
     * @param $long string Longitud
     * @return Response
     */
    public function GetGurrentWeatherByCoords($lat, $long)
    {
        // Current
        $res = $this->MakeRequest("GET", "data/2.5/weather", [
            "lat" => $lat,
            "lon" => $long,
            "units" => "metric",
            "lang" => "es"
        ]);
        $current = [
            "weather" => $res->weather[0],
            "main" => $res->main,
            "time" => Utilidades::GetDateFromUnix($res->dt),
            "country" => $res->sys->country,
            "name" => $res->name,
            "visibility"=>$res->visibility
        ];

        return $current;
    }

    /**
     * Obtener el clima de los siguientes 5 días, en intervalos de 3 horas
     * @param $lat string Latidud
     * @param $long string Longitud
     * @return Response
     */
    public function Get5D3HWeatherByCoords($lat, $long)
    {
        $res = $this->MakeRequest("GET", "data/2.5/forecast", [
            "lat" => $lat,
            "lon" => $long,
            "units" => "metric",
            "lang" => "es"
        ]);
        // 2 days (16 regs)
        $weather = [
            "list" => array_slice($res->list, 0, 16),
        ];
        return $weather;
    }
}
