<x-layout>
        <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
        </a>
        <div class="mx-4">
            {{-- import card --}}
            <x-card class="p-24">
                <div class="flex flex-col items-center justify-center text-center">
                    <img class="w-48 mr-6 mb-6"
                        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/404cat.gif') }}"
                        alt="" />
                    <h3 class="text-2xl mb-2"> <span class="font-bold">Name: </span>{{ $listing->name }}</h3>
                    <p class="text-xl mb-2"> <span class="font-bold">Age: </span> {{ $listing->age }}</p>
                    <div class="text-xl mb-4"> <span class="font-bold">Owner: </span> {{ $listing->owner }}</div>
                    {{-- import tags --}}
                    <x-listing-tags :tagsCsv="$listing->tags" />
                    <div class="text-md my-4">
                        <i class="fa-solid fa-location-dot"></i>{{ $listing->location }}
                    </div>
                    <div class="border border-gray-200 w-full mb-6"></div>
                    <div>
                        <h3 class="text-3xl font-bold mb-4">
                            About Me
                        </h3>
                        <div class="text-lg space-y-6">
                            <p>
                                {{ $listing->description }}
                            </p>

                            <a href="mailto:{{ $listing->contact }}"
                                class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                    class="fa-solid fa-envelope"></i>
                                Contact Me</a>

                            {{-- <a href="{{$listing->url}}" target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i>
                           Visit Website</a> --}}
                        </div>
                    </div>
                </div>
            </x-card>

{{-- EDIT and DELETE in manage.blade.php --}}
            {{-- <x-card class="mt-4 p-2 flex space-x-6">
                <a href="/listings/{{ $listing->id }}/edit">
                    <i class="fa-solid fa-pencil"></i> Edit
                </a>

                 <form method="POST" action="/listings/{{ $listing->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
            </x-card> --}}

        </div>
    </x-layout>
