<x-layout pageTitle="Kitz-Catering / Belegte Brötchen">

    <x-section link="rezepte">

        <div class="grid md:grid-cols-2 grid-cols-1 justify-center gap-10 text-center">

            <!-- modal -->
            <x-modal>
                <x-slot:button>
                    <div class="text-xl text-white p-4 cursor-pointer" @click="fullscreenModal=true">
                        BA01_Kasse
                    </div>
                </x-slot:button>

                <!--content slot -->
                <iframe class="mt-12" src="{{ asset('assets/files/indigokind_briefpapier.pdf') }}" style="width:100%; height:100%;" frameborder="0"></iframe>
                <!--end content slot -->

            </x-modal>

        </div>

    </x-section>

</x-layout>
