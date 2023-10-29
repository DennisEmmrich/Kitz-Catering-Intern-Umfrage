@props([
    'recipes' => array(),
    'ingredients' => array(),
    'path' => '',
    'allergenic1' => 'null',
    'allergenic2' => 'null',
    'allergenic3' => 'null',
    'allergenic4' => 'null',
    'allergenic5' => 'null',
    'allergenic6' => 'null',
    'allergenic7' => 'null',
    'allergenic8' => 'null',
    'allergenic9' => 'null',
    'allergenic10' => 'null',
    'allergenic11' => 'null',
    'allergenic12' => 'null',
])

<x-layout pageTitle="Kitz-Catering / Belegte Brötchen">

    <x-section link="rezepte">

        <x-dashboard-tile-container>

            @foreach($recipes as $recipe)
                <!-- modal -->
                <x-modal>
                    <x-slot:button>
                        <!-- tile -->
                        <x-dashboard-tile-recipe :path="asset( 'assets/images/brötchen.jpg' )">
                            {{ $recipe['product'] }}
                        </x-dashboard-tile-recipe>
                        <!--end tile -->
                    </x-slot:button>

                    <!--content slot -->
                    <x-h1>{{ $recipe['product'] }}</x-h1>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-4">
                        @if(!empty($recipe['firstimage']))
                            <x-recipe-image>
                                {{ getImage($recipe['firstimage']['_id'], 'webp', 600)}}
                                https://placehold.co/600x600
                            </x-recipe-image>
                        @endif

                        <x-recipe-image>
                            https://placehold.co/600x600
                        </x-recipe-image>
                        <x-recipe-image>
                            https://placehold.co/600x600
                        </x-recipe-image>
                    </div>

                    <div class="grid grid-cols-3 gap-x-10">

                        <div class="col-span-3 md:col-span-2 mt-4">
                            <x-h2>Zutaten:</x-h2>
                            <table>
                            @foreach($recipe['ingredients'] as $ingredient)
                                    <tr class="odd:bg-red-400 even:bg-green-200">
                                        <td>{{ $ingredient['quantity'] }}</td>
                                        <td>{{ $ingredient['ingredient'] }}</td>
                                    </tr>
                            @endforeach
                            </table>


                            <x-p>Tabelle</x-p>

                        </div>

                        <div class="col-span-3 md:col-span-1 md:mt-4">

                            <x-h2>Allergene:</x-h2>

                            <div class="grid grid-rows-6 grid-flow-col gap-2 mt-3">

                                <!-- foreach textdatei -->


                                @if($recipe['allergenic1'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Fisch
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic2'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Milch
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic3'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Sulfite
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic4'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Eier <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic5'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Gluten <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic6'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Krebstier <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic7'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Erdnüsse <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic8'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Soja <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic9'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Nüsse <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic10'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Sellerie <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic11'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Schalentier <br />
                                    </x-allergenic>
                                @endif
                                @if($recipe['allergenic12'])
                                    <x-allergenic>
                                        <x-slot:path>

                                        </x-slot:path>
                                        Senf <br />
                                    </x-allergenic>
                                @endif

                            </div>

                        </div>
                    </div>

                    <div class="h-52 mt-6">
                        <x-h2>Zubereitung:</x-h2>
                        <x-p>{!! $recipe['remarks'] !!}</x-p>
                    </div>
                    <!--end content slot -->

                </x-modal>
            @endforeach

        </x-dashboard-tile-container>

    </x-section>

</x-layout>
