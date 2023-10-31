@props([
    'img' => 'https://placehold.co/600x600',
    'recipes' => array(),
])

<x-layout>

    <x-section>

        <!-- mitteilungen start-->
        @foreach($messages as $message)
            @if($message['start'] <= now()->format('Y-m-d') && $message['end'] >= now()->format('Y-m-d'))
                <div class="@if(!empty($message['textColor'])) text-black @endif text-white @if(!empty($message['borderColor'])) border-black @endif rounded-xl p-6 mb-6 bg-bgColorSecondary">
                    <div>
                    {!! $message['text'] !!}
                    </div>
                </div>
            @endif
            <!--
            <div class="whitespace-nowrap">
                <img class="h-32" src="https://placehold.co/600x600" alt="">
                Susanne Emmrich
            </div>
            -->
        @endforeach
        <!-- mitteilungen end-->

        <x-dashboard-tile-container>

            <x-dashboard-tile :path="asset('assets/images/rezepte.jpg')">
                <x-slot:link>{{ route('rezepte') }}</x-slot:link>
                <x-slot:headline>Rezepte</x-slot:headline>
            </x-dashboard-tile>

            <!--
            <x-dashboard-tile :path="asset( $img )">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Bestellungen</x-slot:headline>
            </x-dashboard-tile>
            -->

            <x-dashboard-tile :path="asset( 'assets/images/betriebsanweisungen.jpg' )">
                <x-slot:link>{{ route('betriebsanweisungen') }}</x-slot:link>
                <x-slot:headline>Betriebsanweisungen</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :path="asset('assets/images/gebrauchsanweisung.jpg')">
                <x-slot:link>{{ route('gebrauchsanweisungen') }}</x-slot:link>
                <x-slot:headline>Gebrauchsanweisungen</x-slot:headline>
            </x-dashboard-tile>

            <!--
            <x-dashboard-tile :path="asset('assets/images/onboarding.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Onboarding</x-slot:headline>
            </x-dashboard-tile>
            -->

            <x-dashboard-tile :path="asset('assets/images/ansprechpartner.jpg')">
                <x-slot:link>{{ route('ansprechpartner') }}</x-slot:link>
                <x-slot:headline>Ansprechpartner</x-slot:headline>
            </x-dashboard-tile>

        </x-dashboard-tile-container>

    </x-section>

</x-layout>
