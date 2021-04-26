<?php

namespace App\Http\Controllers;

use App\Services\ForecastService;
use Illuminate\Http\Request;

class ForecastController extends Controller
{
    private $forecastService;

    public function __construct(ForecastService $forecastService)
    {
        $this->forecastService = $forecastService;
    }

    public function index()
    {
        $forecasts = $this->forecastService->getForecastService(count(ForecastService::CODIGOS_LOCALIDADE)) ?? [];

        return view('forecast', compact('forecasts'));
    }

    public function getFromApi(Request $request)
    {
        $forecast = $this->forecastService->getForecastService($request->quantidade ?? null) ?? [];

        return response()->json($forecast, 200);
    }
}
