<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait HttpTrait
{

    /**
     * Hacer una peticion al servicio
     * @param string $method Metodo HTTP (GET|POST|PUT|DELETE)
     * @param string $url URL del servicio
     * @param array $queryParams Parametros del query
     * @param array $formParams Parametros de form
     * @param array $headers Headers de la peticion
     * @return Object
     */
    public function MakeRequest($method, $url, $queryParams = [], $formParams = [], $headers = [])
    {
        $client = new Client(
            [
                "base_uri" => $this->BASE_URL,
                "allow_redirects" => false,
            ]
        );

        // Resolve authorization
        if (method_exists($this, "ResolveAuthorization"))
            $this->ResolveAuthorization($queryParams, $formParams, $headers);

        // Make request
        $res = $client->request($method, $url, [
            "query" => $queryParams,
            "form_params" => $formParams,
            "headers" => $headers
        ]);

        // Get data
        $res = $res->getBody()->getContents();

        // Decode
        if (method_exists($this, "DecodeResponde"))
            $res = $this->DecodeResponde($res);

        // Check error in request
        if (method_exists($this, "CheckErrorResponse"))
            $this->CheckErrorResponse($res);

        return $res;
    }
}
