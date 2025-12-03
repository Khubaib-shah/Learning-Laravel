<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
// to create controller we run this command 'php artisan make:controller LisitngController'
class LisitngController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            "listings" => Listing::latest()->filter(request(key: ['tag', 'search']))->simplePaginate(6)
        ]);
    }

    // show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            "listing" => $listing
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
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', "company")],
            'logo' => 'nullable|image|max:2048',
            'location' => 'required',
            'email' => ['required', 'email'],
            'website' => 'required',
            'description' => 'required',
            'tags' => 'required',
        ]);

        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        // dd($formFields);

        Listing::create($formFields);
        return redirect('/')->with('message', 'Form submitted successfully');

    }

}


// Common Resource Routes: crud
// index - show all listings
// show - show single listing
// create - show create form new listing
// store -  store new listing
// edit - show form to edit listing
// destroy -  delete listing