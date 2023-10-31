<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Listing
            </h2>
            <p class="mb-4">Edit: {{ $listing->name }}</p>
        </header>

        {{-- PUT METHOD --}}
        <form method="POST" action="/listings/{{ $listing->id }}" enctype="multipart/form-data">
            {{-- security purpose --}}
            @csrf
            {{-- IMPORTANT TO ADD FOR PUT REQUEST --}}
            @method('PUT')
            <div class="mb-6">
                <label for="owner" class="inline-block text-lg mb-2">Owner</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="owner"
                {{-- Value here is prefilled --}}
                value="{{ $listing->owner }}" />
                @error('owner')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Pet</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name"
                value="{{ $listing->name }}" placeholder="Your Pet's Name">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="age" class="inline-block text-lg mb-2">Age</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="age"
                value="{{ $listing->age }}" placeholder="Your Pet's Age">
                @error('age')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                value="{{ $listing->location }}"placeholder="Example: Boston MA"  />
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                value="{{ $listing->email }}"/>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- <div class="mb-6">
            <label for="website" class="inline-block text-lg mb-2">
                Website/Application URL
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" />
        </div> --}}

            <div class="mb-6">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                value="{{ $listing->tags }}" placeholder="Example: cat, playdate" />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- IMAGE UPLOAD --}}
            <div class="mb-6">
                <label for="logo" class="inline-block text-lg mb-2">
                    Upload Image
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />

                @error('logo')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include details about your pet">{{ $listing->description }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Update Listing
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
