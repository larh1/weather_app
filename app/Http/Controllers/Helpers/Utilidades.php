<?php

namespace App\Http\Controllers\Helpers;

class Utilidades
{

    /**
     * Convierte una fecha Unix a texto (Timezone America/Mexico_City)
     * @param $time string|double Tiempo es Unix
     * @return string Fecha y hora
     */
    public static function GetDateFromUnix($time)
    {
        $months = [
            "-", "enero", "febrero", "marzo",
            "abril", "mayo", "junio", "julio",
            "agosto", "septiembre", "octubre", "noviembre",
            "diciembre"
        ];
        // Anio
        $y = date("Y", $time);
        // Mes
        $m1 = date("n", $time);
        $m = $months[$m1];
        // Dia
        $d = date("d", $time);
        // Hora
        $t = date("h:i:s A", $time);
        $new = "$d de $m, $y a las $t";
        return $new;
    }
}
