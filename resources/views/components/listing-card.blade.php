@props(['listing'])
{{-- Item --}}
{{-- import slot --}}
<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block"
        src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/404cat.gif')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                {{-- display each listing based on ID --}}
                <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
            </h3>
            <div class="text-xl font-bold mb-4">{{ $listing->owner }}</div>
            {{-- pass tagsCsv as a prop to the x-listing-tags component --}}
            <x-listing-tags :tagsCsv="$listing->tags" />
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> {{ $listing->location }}
            </div>
        </div>
    </div>
</x-card>
