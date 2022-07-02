<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index(Request $weatherRequest)
    {
        $weatherRequest = Http::get("https://goweather.herokuapp.com/weather/Curitiba");
        return view('weather.index', compact('weatherRequest'));
    }
}
