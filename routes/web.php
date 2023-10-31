<?php

// Import ListingController
use App\Http\Controllers\ListingController;
// Import UserController
use App\Http\Controllers\UserController;
// Import request
use Illuminate\Http\Request;
// Import routes
use Illuminate\Support\Facades\Route;
// Import Models
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

// DELETE Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

// GET single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// SHOW Register/Create Form
Route::get('/register', [UserController::class, 'create']);

// CREATE New User
Route::post('/users', [UserController::class, 'store']);

// LOGOUT User
Route::post('/logout', [UserController::class, 'logout']);

// SHOW Login Form
Route::get('/login', [UserController::class, 'login']);

// LOGIN User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
