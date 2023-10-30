@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp

{{-- Check if there is only one tag --}}
@if(count($tags) === 1)
    <ul class="flex">
        <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
            <a href="/?tag={{ $tags[0] }}">{{ $tags[0] }}</a>
        </li>
    </ul>
@else
    {{-- Render all tags normally if there are multiple tags --}}
    <ul class="flex">
        @foreach($tags as $tag)
            <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                <a href="/?tag={{ $tag }}">{{ $tag }}</a>
            </li>
        @endforeach
    </ul>
@endif
