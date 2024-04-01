@props([
    'link' => '',
    'path' => '',
])
<div class="cursor-pointer" draggable="false">
    <a class="no-link-bgColor" href="{{ $link }}">
        <div class="w-full h-56 grid content-end text-white text-2xl font-bold font-sans rounded-xl shadow-md bg-cover bg-center overflow-hidden" style="background-image: url('{{ asset( $path ) }}');">
            <div class="p-3 backdrop-blur-sm bg-bgColorSecondary/30 whitespace-nowrap">
                {{ $headline }}
            </div>
        </div>
    </a>
</div>

