<!-- Funktionssammlung -->
@php
    function sumAnzahlEssen($standorte) {
        $summen = [];

        foreach ($standorte as $standort) {
            foreach ($standort['anzahlEssen'] as $tag => $essen) {
                foreach ($essen as $gericht => $anzahl) {
                    if (!isset($summen[$tag][$gericht])) {
                        $summen[$tag][$gericht] = 0;
                    }
                    $summen[$tag][$gericht] += (int)$anzahl;
                }
            }
        }

        return $summen;
    }


    function sumTotalAnzahlEssen($standorte) {
    $gesamtSumme = [];

    foreach ($standorte as $standort) {
        foreach ($standort['anzahlEssen'] as $tag => $essen) {
            foreach ($essen as $gericht => $anzahl) {
                if (!isset($gesamtSumme[$gericht])) {
                    $gesamtSumme[$gericht] = 0;
                }
                $gesamtSumme[$gericht] += (int)$anzahl;
            }
        }
    }

    return $gesamtSumme;
}
@endphp

<!-- zukünftig aus CMS -->
@php
$standorte = [
        [
        'name' => 'Standort 1',
        'anzahlEssen' => [
            'montag' => [
                'hauptgericht' => '100',
                'hauptgericht-vegetarisch' => '20',
                'ofengemüse' => '50',
                'dessert' => '100',
                'pastabar' => '50',
                'salatbar' => '50'
            ],
            'dienstag' => [
                'hauptgericht' => '100',
                'hauptgericht-vegetarisch' => '20',
                'ofengemüse' => '50',
                'dessert' => '100',
                'pastabar' => '50',
                'salatbar' => '50'
            ],
        ]
    ],
    [
        'name' => 'Standort 2',
        'anzahlEssen' => [
            'montag' => [
                'hauptgericht' => '100',
                'hauptgericht-vegetarisch' => '20',
                'ofengemüse' => '50',
                'dessert' => '100',
                'pastabar' => '50',
                'salatbar' => '50'
            ],
            'dienstag' => [
                'hauptgericht' => '100',
                'hauptgericht-vegetarisch' => '20',
                'ofengemüse' => '50',
                'dessert' => '100',
                'pastabar' => '50',
                'salatbar' => '50'
            ],
        ]
    ],
];
@endphp

<!-- callen der Funktionen -->
@php
    $summen = sumAnzahlEssen($standorte);
    $gesamtSumme = sumTotalAnzahlEssen($standorte);
@endphp

<x-layout>

    <x-section>

   <x-h1>Einkauf Test</x-h1>
        <br />

        @foreach($standorte as $standort)
            <x-h2>{{ $standort['name'] }}</x-h2>
            @foreach($standort['anzahlEssen'] as $tag => $essen)
                <p><strong>{{ strtoupper($tag) }}</strong></p>
                <ul>
                    @foreach($essen as $gericht => $anzahl)
                        <li>{{ $gericht }}: {{ $anzahl }}</li>
                    @endforeach
                </ul>
                <br />
            @endforeach
            <br />
        @endforeach

    </x-section>


    <x-section>
        <x-h2>Summe der Essen aller Standorte pro Tag</x-h2>
        <ul>
            @foreach($summen as $tag => $gerichte)
                <li><strong>{{ strtoupper($tag) }}</strong>:
                    <ul>
                        @foreach($gerichte as $gericht => $anzahl)
                            <li>{{ $gericht }}: {{ $anzahl }}</li>
                        @endforeach
                    </ul>
                </li>
                <br />
            @endforeach
        </ul>
    </x-section>

    <!-- Nur Information über die Anzahl der Gerichte pro Woche -->
    <x-section>
        <x-h2>Gesamtsumme der Essen pro Woche</x-h2>
        <ul>
            @foreach($gesamtSumme as $gericht => $anzahl)
                <li>{{ $gericht }}: {{ $anzahl }}</li>
            @endforeach
        </ul>
    </x-section>

</x-layout>
