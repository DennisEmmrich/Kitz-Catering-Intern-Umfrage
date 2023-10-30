@props([
    'path' => '',
])
<div class="cursor-pointer" @click="fullscreenModal=true" draggable="false">
    <div class="w-full h-52 grid content-end text-white text-2xl font-bold rounded-xl bg-cover bg-center" style="background-image: url('{{ $path }}');">
        <div class="p-3 backdrop-blur-sm bg-bgColorSecondary/30 whitespace-nowrap rounded-b-xl">
            {{ $slot }}
        </div>
    </div>
</div>
