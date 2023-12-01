<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\DestinationImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

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
        $destinations = destination::findorfail($id);
        $images = DestinationImage::where('destination_id', $id)->get();
        return view('pages.destination_details', compact('destinations','images') );
    }
    public function travel_destination(Request $request)
    {
        $search = $request['search'] ??"";
        if ($search != "") {
            $destinations = destination::where('name', 'like', '%' . $search . '%')->get();
        } else {
            $destinations = destination::latest()->get();
        }
        //dd($destinations[0]);
        return view('pages.travel_destination', compact('destinations'));
    }
    public function booking(string $id)
    {
        if (!Auth::check()) {
            return Redirect::route('login')->with('error', 'You must log in to access the booking page.');
        }
        $destination = destination::find($id);
        return view('pages.booking', compact('destination'));
    }

}
