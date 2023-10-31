<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// import Rule from Validation
use Illuminate\Validation\Rule;
// import Listing from Models
use App\Models\Listing;

class ListingController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            // filtering the tags
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6) // data is coming from models/listing
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

     // Store Listing Data
     public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'owner' => ['required', Rule::unique('listings',
            'owner')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

         Listing::create($formFields);

         // Flash Message
         return redirect('/')->with('message', 'Listing created successfully!');
    }
}
