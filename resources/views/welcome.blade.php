@props([
    'img' => 'https://placehold.co/600x600',
    'recipes' => array(),
])

<x-layout>

    <x-section>

        <!--
        <div class="flex p-4 mb-10 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 justify-between" role="alert">
            <div class="w-2/3 ">
                Liebe Kollegen, <br />
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore
                et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. <br /> <br /> <br />

                Mit freundlichen Grüßen <br /> <br />

                Susanne Emmrich

            </div>
            <div class="whitespace-nowrap">
                <img class="h-32" src="https://placehold.co/600x600" alt="">
                Susanne Emmrich
            </div>
        </div>
        -->

        <div class="grid md:grid-cols-2 grid-cols-1 justify-center gap-10 text-center">

            <x-dashboard-tile :path="asset('assets/images/rezepte.jpg')">
                <x-slot:link>{{ route('rezepte') }}</x-slot:link>
                <x-slot:headline>Rezepte</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :path="asset( $img )">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Bestellungen</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :path="asset( $img )">
                <x-slot:link>{{ route('rezepte') }}</x-slot:link>
                <x-slot:headline>Betriebsanweisungen</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :path="asset('assets/images/gebrauchsanweisung.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Gebrauchsanweisungen</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :path="asset('assets/images/onboarding.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Onboarding</x-slot:headline>
            </x-dashboard-tile>

            <x-dashboard-tile :path="asset('assets/images/ansprechpartner.jpg')">
                <x-slot:link></x-slot:link>
                <x-slot:headline>Ansprechpartner</x-slot:headline>
            </x-dashboard-tile>

        </div>

    </x-section>

</x-layout>
