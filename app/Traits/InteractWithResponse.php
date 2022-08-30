<?php

namespace App\Traits;

use Exception;

trait InteractWithResponse
{
    /**
     * Decodificar la respuesta obtenida
     * @param array $response
     * @return StdClass
     */
    public function DecodeResponde($res)
    {
        $decoded = json_decode($res);
        return $decoded->data ?? $decoded;
    }

    /**
     * Verrificar que la respuesta no tenga errores
     * @param StdClass $res
     */
    public function CheckErrorResponse($res)
    {
        if (isset($res->error))
        throw new Exception("Error Processing Request: $res");
    }
}
