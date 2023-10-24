@props([
    'path' => 'https://placehold.co/20x20',
    ]
)
<div class="flex col-span-1 space-x-1 p-2">
    <img class="h-8 w-8 my-auto" src="{{ $path }}" alt="">
    <div class="max-h-fit my-auto">
        {{ $slot }}
    </div>
</div>
