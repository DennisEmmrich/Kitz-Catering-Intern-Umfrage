@props([
    'link' => '',
    'path' => '',
])
<div class="cursor-pointer transform hover:scale-105 transition" @click="fullscreenModal=true" draggable="false">
    <div class="w-full h-52 grid content-end text-white text-2xl font-bold rounded-xl bg-cover bg-center" style="background-image: url('{{ asset( $path ) }}');">
        <div class="p-3 backdrop-blur-sm bg-bgColorSecondary/30 whitespace-nowrap rounded-b-xl">
            {{ $headline }}
        </div>
    </div>
</div>
