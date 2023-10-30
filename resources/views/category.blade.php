@props([
    'recipes' => array(),
    'ingredients' => array(),
    'path' => '',
])

<x-layout pageTitle="Kitz-Catering / Belegte Brötchen">

    <x-section link="rezepte">

        <x-dashboard-tile-container>

            @foreach($recipes as $recipe)
                <!-- modal -->
                <x-modal>
                    <x-slot:button>
                        <!-- tile -->
                        @if(!empty($recipe['thirdImage']))
                        <x-dashboard-tile-recipe :path="getImage($recipe['thirdImage']['_id'], 'webp', 600)">
                            {{ $recipe['product'] }}
                        </x-dashboard-tile-recipe>
                        @endif
                        <!--end tile -->
                    </x-slot:button>

                    <!--content slot -->
                    <x-h1>{{ $recipe['product'] }}</x-h1>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-4">
                        @if(!empty($recipe['firstImage']))
                            <x-recipe-image>
                                {{ getImage($recipe['firstImage']['_id'], 'webp', 600)}}
                            </x-recipe-image>
                        @endif
                        @if(!empty($recipe['secondImage']))
                            <x-recipe-image>
                                {{ getImage($recipe['secondImage']['_id'], 'webp', 600)}}
                            </x-recipe-image>
                        @endif
                        @if(!empty($recipe['thirdImage']))
                            <x-recipe-image>
                                {{ getImage($recipe['thirdImage']['_id'], 'webp', 600)}}
                            </x-recipe-image>
                        @endif
                    </div>

                    <div class="grid grid-cols-3 gap-x-10">

                        <div class="col-span-3 md:col-span-2 mt-4">
                            <x-h2>Zutaten</x-h2>
                            <table class="mt-3">
                            @foreach($recipe['ingredients'] as $ingredient)
                                    <tr class="odd:bg-bgColorSecondary even:bg-bgColorPrimary mt-3">
                                        <td class="w-full pl-3 py-1">{{ $ingredient['ingredient'] }}</td>
                                        <td class="w-auto whitespace-nowrap px-3 py-1">{{ $ingredient['quantity'] }}</td>
                                    </tr>
                            @endforeach
                            </table>
                        </div>

                        <div class="col-span-3 md:col-span-1 md:mt-4">
                            <x-h2>Allergene</x-h2>
                            <div class="grid grid-rows-6 grid-flow-col gap-2 mt-2.5">
                            @foreach($recipe['allergenics'] as $allergenic)
                                <x-allergenic>
                                    <x-slot:path>
                                        {{ asset('assets/icons/'.$allergenic.'.svg') }}
                                    </x-slot:path>
                                    {{ $allergenic }}
                                </x-allergenic>
                            @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="mt-6">
                        <x-h2>Bemerkungen</x-h2>
                        <x-p>{!! $recipe['remarks'] !!}</x-p>
                    </div>
                    <!--end content slot -->

                </x-modal>
            @endforeach

        </x-dashboard-tile-container>

    </x-section>

</x-layout>
