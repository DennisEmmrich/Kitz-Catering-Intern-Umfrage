<?php
$contacts = array(
    [
    'image' => asset('assets/contacts/Susanne E.jpg'),
    'firstname' => 'Susanne',
    'lastname' => 'Emmrich',
    'position' => '',
    'phone' => '',
    'mobile' => '0172 4723599',
    'mail' => '',
    ],
);
?>

<x-layout pageTitle="Kitz-Catering / Ansprechpartner">

    <x-section link="welcome">

        <div class="grid md:grid-cols-2 grid-cols-1 justify-center gap-10 text-center">

            @foreach($contacts as $contact)
            <div class="text-white rounded-xl bg-bgColorSecondary p-6 text-center">
                <img class="h-52 w-52 rounded-full mx-auto" src="{{ $contact['image'] }}" alt="" draggable="false">
                <div class="w-52 pt-4 mx-auto">
                    <div>
                        <x-h2>{{ $contact['firstname'] }} {{ $contact['lastname'] }}</x-h2>
                        @if(!empty($contact['position']))
                            <x-p class="italic">{{ $contact['position'] }}</x-p>
                        @endif
                    </div>
                    @if(!empty($contact['phone']))
                        <x-p>{{ $contact['phone'] }}</x-p>
                    @endif
                    @if(!empty($contact['mobile']))
                        <x-p>{{ $contact['mobile'] }}</x-p>
                    @endif
                    @if(!empty($contact['mail']))
                        <x-p>{{ $contact['mail'] }}</x-p>
                    @endif
                </div>
            </div>
            @endforeach

        </div>

    </x-section>

</x-layout>

