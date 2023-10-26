<?php
$instructions = array(
    [
    'name' => 'Gebrauchsanweisung 1',
    'file' => asset('assets/betriebsanweisungen/dummy.pdf'),
    ],
    [
    'name' => 'Gebrauchsanweisung 2',
    'file' => asset('assets/betriebsanweisungen/dummy.pdf'),
    ],
);
?>

<x-layout pageTitle="Kitz-Catering / Gebrauchsanweisungen">

    <x-section link="welcome">

        <div class="grid grid-cols-1">

            @foreach($instructions as $instruction)
            <!-- modal -->
            <x-modal>
                <x-slot:button>
                    <x-list-item>
                        {{ $instruction['name'] }}
                    </x-list-item>
                </x-slot:button>

                <!--content slot -->
                <iframe class="mt-12" src="{{ $instruction['file'] }}" style="width:100%; height:100%;" frameborder="0"></iframe>
                <!--end content slot -->
            </x-modal>
            @endforeach

        </div>

    </x-section>

</x-layout>

