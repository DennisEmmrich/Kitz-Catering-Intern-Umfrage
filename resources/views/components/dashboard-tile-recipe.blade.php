@props([
    'link' => '',
    'path' => '',
    'key' => 'show_'.Str::random(),
    'modalContent' => ''
])
<div class="cursor-pointer transform hover:scale-105 transition" x-data="{ {{$key}}: false }" draggable="false">

    <div class="w-full h-52 grid content-end text-white text-2xl font-bold rounded-xl bg-cover bg-center" @click="{{ $key }} = true"  style="background-image: url('{{ asset( $path ) }}');">
        <div class="p-3 backdrop-blur-sm bg-bgColorSecondary/30 whitespace-nowrap">
            {{ $headline }}
        </div>
    </div>

    <x-modal key="{{ $key }}" close="true">
        {{ $modalContent }}
    </x-modal>

</div>
