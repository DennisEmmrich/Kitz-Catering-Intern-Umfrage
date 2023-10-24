@props([
    'type' => 'normal',
    'color' => [
        'normal' => 'text-white',
        'black' => 'text-black',
    ],
])
<p {{ $attributes->merge(['class' => "font-sans font-light text-md mb-4 box-border leading-6 transition {$color[$type]}"]) }}>
    {{ $slot }}
</p>
