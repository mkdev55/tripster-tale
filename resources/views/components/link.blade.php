@props([
    'link',
    'isCurrent'
])

<a class="text-gray-800 text-sm font-semibold hover:text-white mr-4 p-8 hover:bg-[#38bdf8] {{ ($isCurrent) ? 'bg-[#38bdf8] text-white' : '' }}" href="{{ $link }}">
    {{ $slot }}
</a>
