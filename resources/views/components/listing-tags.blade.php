@props(['tagsSsv'])

@php
    // This explode('seperator', string) convert the space-separated string into an array
    $tags = explode(' ', $tagsSsv);
@endphp

<ul class="flex">
    @foreach ($tags as $tag)
        <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
            <a href="/?tag={{ $tag }}">{{ $tag }}</a>
        </li>
    @endforeach
</ul>