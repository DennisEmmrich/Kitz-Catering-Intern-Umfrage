<x-layout pageTitle="Kitz-Catering / Gebrauchsanweisungen">

    <x-section link="welcome">

        <div class="grid grid-cols-1">

            @foreach($manuals as $manual)
            <!-- modal -->
            <x-modal>
                <x-slot:button>
                    <x-list-item>
                        {{ $manual['title'] }}
                    </x-list-item>
                </x-slot:button>

                <!--content slot -->
                <x-iframe :path="getAsset($manual['file']['_id'])"/>
                <!--end content slot -->
            </x-modal>
            @endforeach

        </div>

    </x-section>

</x-layout>

