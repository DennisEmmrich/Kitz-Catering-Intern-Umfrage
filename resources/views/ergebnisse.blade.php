@props([
    'img' => 'https://placehold.co/600x600',
    'recipes' => array(),
])

<x-layout>

    <x-section>

        <x-dashboard-tile-container>

            <x-dashboard-tile :path="asset('assets/images/ergebnisse.jpg')">
                <x-slot:link>{{ route('ergebnisse') }}</x-slot:link>
                <x-slot:headline>Marie Beschütz Schule</x-slot:headline>
            </x-dashboard-tile>

        </x-dashboard-tile-container>

    </x-section>

</x-layout>

