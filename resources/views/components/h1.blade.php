@props([
    'type' => 'normal',
    'color' => [
        'normal' => 'text-white',
        'secondary' => 'text-black',
        'white' => 'text-white',
    ],
])
<h1 {{ $attributes->merge(['class' => "xl:text-2xl lg:text-3xl text-2xl font-bold font-sans leading-tight select-none cursor-default {$color[$type]}"]) }}>
    {{ $slot }}
</h1>
