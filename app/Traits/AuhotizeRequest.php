<?php

namespace App\Traits;

trait AuhotizeRequest
{
    /**
     * Resolver la autorizacion del servicio
     * @param array $queryParams Parametros del query
     * @param array $formParams Parametros de form
     * @param array $headers Headers de la peticion
     * @return void
     */
    public function ResolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $queryParams["appid"] = $this->API_KEY;
    }
}
