<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import Listing from Models
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::all() // data is coming from models/listing
        ]);
    }

    // Show single listing
    public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}
