<?php

namespace App\Http\Controllers;

use App\Helpers\KonversiHelper;
use Illuminate\Http\Request;

class KonversisuhuController extends Controller
{
    public function index()
    {
        return view('conversi');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'temperature' => 'required|numeric',
            'conversion' => 'required|in:to_fahrenheit,to_kelvin',
        ]);

        $temperature = $request->input('temperature');
        $conversion = $request->input('conversion');

        $result = $conversion === 'to_fahrenheit'
            ? KonversiHelper::celciusToFahrenheit($temperature)
            : KonversiHelper::celciusToKelvin($temperature);


        return view('conversi', compact('temperature', 'conversion', 'result'));
    }
}
