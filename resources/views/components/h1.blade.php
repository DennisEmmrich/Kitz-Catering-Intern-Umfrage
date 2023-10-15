@props([
    'type' => 'normal',
    'color' => [
        'normal' => 'text-white',
        'secondary' => 'text-black',
        'white' => 'text-white',
    ],
])
<h1 {{ $attributes->merge(['class' => "xl:text-3xl lg:text-3xl sm:text-3xl text-xl font-bold font-eurostile leading-tight select-none cursor-default {$color[$type]}"]) }}>
    {{ $slot }}
</h1>
