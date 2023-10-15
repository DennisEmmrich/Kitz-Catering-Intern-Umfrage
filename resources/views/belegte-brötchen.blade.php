@props([
    'img' => 'https://placehold.co/600x600'
])

<x-layout pageTitle="Kitz-Catering / Belegte Brötchen">

    <x-section link="welcome">

        <div class="grid md:grid-cols-2 grid-cols-1 justify-center gap-10 text-center">

            <x-dashboard-tile :info="false" :path="asset( 'assets/images/brötchen.jpg' )">
                <x-slot:link>{{ route('rezept-brötchen') }}</x-slot:link>
                <x-slot:headline>Brötchen 1</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset( $img )">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Brötchen 2</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset( $img )">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Brötchen 3</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset( $img )">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Brötchen 4</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :info="false" :path="asset( $img )">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Brötchen 5</x-slot:headline>
            </x-dashboard-tile>

        </div>

    </x-section>

</x-layout>
