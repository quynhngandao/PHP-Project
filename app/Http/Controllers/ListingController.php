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
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'owner' => ['required', Rule::unique('listings', 'owner')],
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        // Path for uploading pic
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // $formFields['user_id'] = auth()->id();

        // creates a new record without the need for an existing instance of the model
        Listing::create($formFields);

        // Flash Message
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    // Show Edit Form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    // EDIT Listing Data
    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'owner' => ['required',],
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        // Path for uploading pic
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // $formFields['user_id'] = auth()->id();

        // existing instance of the Listing model stored in the $listing variable
        $listing->update($formFields);

        // FLASH MESSAGE for edit
        return back()->with('message', 'Listing created successfully!');
    }
}
