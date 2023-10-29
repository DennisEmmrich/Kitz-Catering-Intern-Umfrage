@props([
    'img' => 'https://placehold.co/600x600'
])

<x-layout pageTitle="Kitz-Catering / Rezepte">

    <x-section link="welcome">

        <x-dashboard-tile-container>

            @foreach($categories as $category)
                <x-dashboard-tile :path="getImage($category['image']['_id'], 'webp', 600)">
                    <x-slot:link>{{ route('rezept', $category['slug']) }}</x-slot:link>
                    <x-slot:headline>{{ $category['name'] }}</x-slot:headline>
                </x-dashboard-tile>
            @endforeach

            <!--

            <x-dashboard-tile :info="false" :path="asset('assets/images/belegte_broetchen_3.jpg')">
                <x-slot:link>{{ route('belegte-brötchen') }}</x-slot:link>
                <x-slot:headline>Belegte Brötchen</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset('assets/images/backwaren.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Backwaren</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset('assets/images/hauptgerichte.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Hauptgerichte</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset('assets/images/snacks.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Snacks</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset('assets/images/desserts.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Desserts</x-slot:headline>
            </x-dashboard-tile>

            -->

        </x-dashboard-tile-container>

    </x-section>

</x-layout>
