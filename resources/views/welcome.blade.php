@props([
    'img' => 'https://placehold.co/600x600',
    'recipes' => array(),
])

<x-layout>

    <x-section>

        <!-- mitteilungen start-->
        {{--
        @foreach($messages as $message)
            @if($message['start'] <= now()->format('Y-m-d') && $message['end'] >= now()->format('Y-m-d'))
                <div class="@if($message['borderColorRed']) border-2 border-red-500 @else border-2 border-[#dfcc91] @endif text-white rounded-xl shadow-md p-6 mb-6 bg-bgColorSecondary">
                    <div>
                        {!! \Illuminate\Support\Facades\Blade::render(getBladeString($message['text'])) !!}
                    </div>
                </div>
            @endif
        @endforeach
        --}}
        <!-- mitteilungen end-->

        <x-dashboard-tile-container>

            <x-dashboard-tile :path="asset('assets/images/standort.png')">
                <x-slot:link>{{ route('umfrage') }}</x-slot:link>
                <x-slot:headline>Marie Beschütz Schule</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :path="asset('assets/images/ergebnisse.jpg')">
                <x-slot:link>{{ route('ergebnisse') }}</x-slot:link>
                <x-slot:headline>Umfrageergebnisse</x-slot:headline>
            </x-dashboard-tile>

        </x-dashboard-tile-container>

    </x-section>

</x-layout>
