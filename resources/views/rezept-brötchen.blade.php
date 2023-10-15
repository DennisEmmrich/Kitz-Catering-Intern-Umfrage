@props([
    'img' => 'https://placehold.co/600x600'
])
<x-layout>
    <x-section link="belegte-brötchen">

        <x-h1>Brötchenname</x-h1>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-4">
            <div class="col-span-1">
                <img class="h-52 w-full object-cover object-center" src="{{ asset( $img ) }}" alt="">
            </div>
            <div class="col-span-1">
                <img class="h-52 w-full object-cover object-center" src="{{ asset( $img ) }}" alt="">
            </div>
            <div class="col-span-1">
                <img class="h-52 w-full object-cover object-center" src="{{ asset( $img ) }}" alt="">
            </div>
        </div>

        <div class="grid grid-cols-3 gap-x-10">
            <div class="col-span-2">
                <x-h2>Zutaten:</x-h2>
            </div>
            <div class="col-span-1">
                <x-h2>Allergene:</x-h2>
            </div>
            <div class="h-72 max-h-72 col-span-2 outline">
                Tabelle
            </div>
            <div class="h-72 max-h-72 col-span-1 outline">
                Tabelle
            </div>
        </div>

        <x-h2>Zubereitung:</x-h2>
        <div class="h-52 outline">

        </div>


    </x-section>
</x-layout>
