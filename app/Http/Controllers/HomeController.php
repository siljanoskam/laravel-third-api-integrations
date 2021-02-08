<?php

namespace App\Http\Controllers;


use App\Services\CovidStatisticService;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index(CovidStatisticService $covidStatisticService) {
        $confirmedCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'confirmed');
        $recoveredCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'recovered');
        $deadCovidCasesUntilToday = $covidStatisticService->getTotalCasesByCountryAndType('macedonia', 'deaths');

        $today = Carbon::now()->toDateString();

        return view('index', [
            'today' => $today,
            'confirmedCovidCasesUntilToday' => $confirmedCovidCasesUntilToday,
            'recoveredCovidCasesUntilToday' => $recoveredCovidCasesUntilToday,
            'deadCovidCasesUntilToday' => $deadCovidCasesUntilToday,
        ]);
    }
}
