<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function destination_details()
    {
        return view('pages.destination_details');
    }
    public function travel_destination()
    {
        return view('pages.travel_destination');
    }
}
