<?php

namespace Tests\Unit;

use App\Helpers\KonversiHelper;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class ConversiHelperTest extends TestCase
{
    public function testCelciusToFahrenheit()
    {
        $this->assertEquals(32, KonversiHelper::celciusToFahrenheit(0));
    }

    public function testCelciusToKelvin()
    {
        $this->assertEquals(273.15, KonversiHelper::celciusToKelvin(0));
    }

    #[DataProvider('fahrenheitProvider')]
    public function testCelciusToFahrenheitWithProvider($celcius, $expected)
    {
        $this->assertEquals($expected, KonversiHelper::celciusToFahrenheit($celcius), '', 0.1);
    }
    public static function fahrenheitProvider(): array
    {
        return [
            [0, 32],
            [100, 212],
            [37, 98.6],
            [-40, -40],
        ];
    }

    #[DataProvider('kelvinProvider')]
    public function testCelciusToKelvinWithProvider($celcius, $expected)
    {
        $this->assertEquals($expected, KonversiHelper::celciusToKelvin($celcius), '', 0.1);
    }

    public static function kelvinProvider(): array
    {
        return [
            [0, 273.15],
            [100, 373.15],
            [37, 310.15],
            [-273.15, 0], // absolute zero
        ];
    }
}
