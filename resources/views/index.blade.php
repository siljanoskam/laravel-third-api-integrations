<div class="container">
    <div class="col-6">
        <h1>Republic of North Macedonia</h1>
        <h2>{{ $today }}</h2>

        <h3 style="background-color: blue; color: white;">Confirmed Cases: {{ $confirmedCovidCasesUntilToday->Cases }}</h3>
        <h3 style="background-color: green; color: white;">Recovered Cases: {{ $recoveredCovidCasesUntilToday->Cases }}</h3>
        <h3 style="background-color: black; color: white;">Deaths: {{ $deadCovidCasesUntilToday->Cases }}</h3>
    </div>
</div>
