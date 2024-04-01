@props([
    'img' => asset('assets/images/placeholder.jpeg')
])

<x-layout pageTitle="Kitz-Catering / Rezepte">

    <x-section link="welcome">

        <x-dashboard-tile-container>

            @foreach($categories as $category)
                <x-dashboard-tile :path="!empty($category['image']) ? getImage($category['image']['_id'], 'webp', 600) : asset('assets/images/placeholder.jpeg')">
                    <x-slot:link>{{ route('rezept', $category['slug']) }}</x-slot:link>
                    <x-slot:headline>{{ $category['name'] }}</x-slot:headline>
                </x-dashboard-tile>
            @endforeach

        </x-dashboard-tile-container>

    </x-section>

</x-layout>
