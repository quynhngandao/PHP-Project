<x-layout>
<x-card class="p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create a Listing
        </h2>
        <p class="mb-4">List your pet for a playdate or rehoming</p>
    </header>

    <form action="">
        <div class="mb-6">
            <label for="owner" class="inline-block text-lg mb-2">Owner</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="owner"
            placeholder="Your Name" />
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Pet</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                placeholder="Your Pet's Name">
        </div>

        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Location</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                placeholder="Example: Boston MA" />
        </div>

        <div class="mb-6">
            <label for="email" class="inline-block text-lg mb-2"> Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" />
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
                placeholder="Example: cat, playdate" />
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                <img src="" class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
                placeholder="Include details about your pet"></textarea>
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
