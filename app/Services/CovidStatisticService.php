<?php

namespace App\Services;

use Carbon\Carbon;

class CovidStatisticService
{
    public function getTotalCasesByCountryAndType($country, $type)
    {
        $today = Carbon::now()->toDateString();

        $httpClient = new \GuzzleHttp\Client();
        $request =
            $httpClient
                ->get("https://api.covid19api.com/total/country/${country}/status/${type}?from=${today}&to=${today}");

        $response = json_decode($request->getBody()->getContents());

        return $response[count($response) - 1];
    }
}
