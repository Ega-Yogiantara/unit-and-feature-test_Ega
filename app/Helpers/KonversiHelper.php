<?php

namespace App\Helpers;

class KonversiHelper
{
    /**
     * Konversi dari Celcius ke Fahrenheit
     */
    public static function celciusToFahrenheit($celsius)
    {
        return ($celsius * 9 / 5) + 32;
    }

    /**
     * Konversi dari Celcius ke Kelvin
     */
    public static function celciusToKelvin($celsius)
    {
        return $celsius + 273.15;
    }
}
