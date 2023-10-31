<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;
// import module
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing

// GET all listing
Route::get('/', [ListingController::class, 'index']);

// GET Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

// STORE Listing Data
Route::post('/listings', [ListingController::class, 'store']);

// SHOW Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// UPDATE Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// GET single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// OLD
// // get all listing
// Route::get('/', function () {
//     return view('listings', [
//         'heading' => 'Latest Listings',
//         'listings' => Listing::all() // data is coming from models/listing
//     ]);
// });

// // get single listing
// Route::get('/listings/{listing}', function (Listing
// $listing) {
//     return view('listing', [
//         'listing' => $listing
//     ]);
// });


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
// OR
// Route::get('/listings/{id}', function ($id) {
//     return view('listing', [
//         'listing' => Listing::find($id)
//     ]);
// });
