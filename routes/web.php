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
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth'); // use authenticate middleware, only authenticated users can access certain routes or controller actions

// STORE Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// SHOW Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// UPDATE Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// DELETE Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// GET single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// SHOW Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest'); // use guest middleware, only guests, or unauthenticated users, can access certain routes or controller actions

// CREATE New User
Route::post('/users', [UserController::class, 'store']);

// LOGOUT User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// SHOW Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest'); // name('login') is in Middleware > Authenticate

// LOGIN User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
