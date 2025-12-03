<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
// to create controller we run this command 'php artisan make:controller LisitngController'
class LisitngController extends Controller
{
    // Show all listings
    public function index()
    {
        return view('listings.index', [
            "listings" => Listing::latest()->filter(request(key: ['tag', 'search']))->get()
        ]);
    }


    // show single listing
    public function show(Listing $listing)
    {
        return view('listings.show', [
            "listing" => $listing
        ]);
    }

    // Create Listing
    public function create()
    {
        return view('listings.create');
    }
}


// Common Resource Routes: crud
// index - show all listings
// show - show single listing
// create - show create form new listing
// store -  store new listing
// edit - show form to edit listing
// destroy -  delete listing