@props(['color' => 'blue'])
<button {{ $attributes->merge(['type' => 'submit', 'class' => "text-center bg-$color-600 text-white py-2 px-8 rounded-md"]) }}>
    {{ $slot }}
</button>