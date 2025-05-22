<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Http\Response;

class FeatureConversiTest extends TestCase
{
    public function testLoadKonversiPage(): void
    {
        $response = $this->get('/conversi');
        $response->assertStatus(Response::HTTP_OK);
        $response->assertSee('Konversi Suhu');
    }

    
    public function testKonversiSuhuCelsiusToFahrenheit()
    {
        // Mengakses halaman form
        $response = $this->get('/conversi');
        $response->assertStatus(Response::HTTP_OK);
        $response->assertSee('Konversi Suhu');

        $data = [
            'temperature' => 100,
            'conversion' => 'to_fahrenheit',
        ];
        $storeData = $this->post('/conversi', $data);

        $storeData->assertStatus(Response::HTTP_OK);
        $storeData->assertSee('Hasil: 212');
    }

    public function testKonversiSuhuCelsiusToKelvin()
    {
        // Mengakses halaman form
        $response = $this->get('/conversi');
        $response->assertStatus(Response::HTTP_OK);
        $response->assertSee('Konversi Suhu');

        $data = [
            'temperature' => 100,
            'conversion' => 'to_kelvin',
        ];
        $storeData = $this->post('/conversi', $data);

        $storeData->assertStatus(Response::HTTP_OK);
        $storeData->assertSee('Hasil: 373');
    }

    public function testKonversiSuhuWithInvalidInput(): void
    {
        $data = [
            'temperature' => 'e', // input invalid
            'conversion' => 'to_fahrenheit',
        ];
        $response = $this->post('/conversi', $data);
        $response->assertSessionHasErrors('temperature');
    }

    public function testKonversiSuhuWithEmptyInput(): void
    {
        $data = [
            'temperature' => '', // input invalid
            'conversion' => 'to_fahrenheit',
        ];
        $response = $this->post('/conversi', $data);
        $response->assertSessionHasErrors('temperature');
    }

}
