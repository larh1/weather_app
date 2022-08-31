<?php

namespace App\Services;

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

    public function Test()
    {
        try
        {
            $res = $this->MakeRequest(
                "GET",
                "geo/1.0/direct",
                [
                    "q" => "merida",
                    "limit" => 10
                ]
            );
            dd($res);
        }
        catch (Exception $e)
        {
            dd($e);
        }
    }
}
