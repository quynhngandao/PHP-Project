<?php

namespace App\Http\Controllers;

// import Listing from Models
use App\Models\Listing;
// import Request
use Illuminate\Http\Request;
// import Rule from Validation
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //// SHOW all listings
    public function index()
    {
        return view('listings.index', [
            // filtering the tags
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->paginate(6) // data is coming from models/listing
        ]);
    }

      //Show single listing
      public function show(Listing $listing) {
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
    
    //// SHOW Create Form
    public function create()
    {
        return view('listings.create');
    }

    //// STORE Listing Data
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

        $formFields['user_id'] = auth()->id(); // authenticate user associated with listing

        // creates a new record without the need for an existing instance of the model
        Listing::create($formFields);

        // Flash Message
        return redirect('/')->with('message', 'Listing created successfully!');
    }

    //// SHOW Edit Form
    public function edit(Listing $listing)
    {
        return view('listings.edit', ['listing' => $listing]);
    }

    //// UPDATE Listing Data
    public function update(Request $request, Listing $listing)
    {

        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

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

        // existing instance of the Listing model stored in the $listing variable
        $listing->update($formFields);

        // FLASH MESSAGE for edit
        return back()->with('message', 'Listing created successfully!');
    }

    //// DELETE Listing
    public function destroy(Listing $listing)
    {
        // Make sure logged in user is owner
        if ($listing->user_id != auth()->id()) {
            abort(403, 'Unauthorized Action');
        }

        $listing->delete();
        // FLASH MESSAGE for DELETE
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    //// MANAGE Listings
    public function manage() {
        return view('listings.manage', ['listings' => auth()->user()->listings()->get()]);
    }
}
