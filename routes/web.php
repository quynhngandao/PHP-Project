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
Route::get('/listings/{listing}', function (Listing
$listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});

// ALTERNATIVE

// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id); // Data is coming from models/listing

//     if ($listing ) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });

// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });
