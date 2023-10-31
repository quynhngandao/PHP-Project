<x-layout>
    <x-card class="p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create a Listing
            </h2>
            <p class="mb-4">List your pet for a playdate or rehoming</p>
        </header>

        {{-- POST METHOD --}}
        <form method="POST" action="/listings">
            {{-- security purpose --}}
            @csrf
            <div class="mb-6">
                <label for="owner" class="inline-block text-lg mb-2">Owner</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="owner" value="{{old('owner')}}"
                    />
                @error('owner')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2">Pet</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}"
                    placeholder="Your Pet's Name" >
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="age" class="inline-block text-lg mb-2">Age</label>
                <input type="number" class="border border-gray-200 rounded p-2 w-full" name="age" value="{{old('age')}}"
                    placeholder="Your Pet's Age" >
                @error('age')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="location" class="inline-block text-lg mb-2">Location</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                    placeholder="Example: Boston MA" />
                @error('location')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2">Email</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"
                />
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
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" value="{{old('tags')}}"
                    placeholder="Example: cat, playdate" />
                @error('tags')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- IMAGE UPLOAD --}}
            {{-- <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
      @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
        </div> --}}

            <div class="mb-6">
                <label for="description" class="inline-block text-lg mb-2">
                    Description
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                    placeholder="Include details about your pet">{{old('description')}}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                    @enderror
            </div>

            <div class="mb-6">
                <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                    Create Listing
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </x-card>
</x-layout>
