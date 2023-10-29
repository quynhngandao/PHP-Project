<?php

use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
// import module
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// get all listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all() // data is coming from models/listing
    ]);
});

// get single listing
Route::get('/listings/{id}', function ($id) {
    $listing = Listing::find($id); // Data is coming from models/listing

    return view('listing', [
        'listing' => $listing
    ]);
});
