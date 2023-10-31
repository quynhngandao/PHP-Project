<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import Listing from Models
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            // filtering the tags
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get() // data is coming from models/listing
        ]);
    }

    // Show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    // Show Create Form
    public function create()
    {
        return view('listings.create');
    }
}
