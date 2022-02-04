@props(['trigger'])

<div
    class="flex fixed top-0 left-0 bg-gray-900 bg-opacity-60 items-center w-full h-full"
    x-show="mobileSide"
    x-on:click.self="mobileSide = false"
    x-on:keydown.escape.window="mobileSide = false"
    x-cloak
>
    <div {{ $attributes->merge(['class' => 'm-auto bg-gray-200 shadow-2xl rounded-xl p-8']) }}>
        {{ $slot }}
    </div>
</div>

