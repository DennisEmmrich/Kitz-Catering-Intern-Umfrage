@props([
    'type' => 'normal',
    'color' => [
        'normal' => 'text-white',
        'secondary' => 'text-black',
        'white' => 'text-white',
    ],
])
<h1 {{ $attributes->merge(['class' => "md:text-2xl text-xl font-bold font-sans leading-tight select-none cursor-default {$color[$type]}"]) }}>
    {{ $slot }}
</h1>
