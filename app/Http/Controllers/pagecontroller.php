<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index()
    {
        $destinations = destination::latest()->get();
        return view('pages.index', compact('destinations'));
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function destination_details(string $id)
    {
        $destinations = destination::find($id);
        return view('pages.destination_details', compact('destinations') );
    }
    public function travel_destination(Request $request)
    {
        $destinations = destination::latest()->get();
        //dd($destinations[0]);
        return view('pages.travel_destination', compact('destinations'));
    }
    public function booking(string $id)
    {
        $destination = destination::findorfail($id);
        return view('pages.booking', compact('destination'));
    }

}
