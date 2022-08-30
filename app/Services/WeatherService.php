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

    public function Test()
    {
        try
        {
            $res = $this->MakeRequest(
                "GET",
                "geo/1.0/direct",
                [
                    "q" => "merida",
                    "limit" => 5
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
