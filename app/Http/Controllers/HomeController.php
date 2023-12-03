<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $destinations = destination::all();
        return view('pages.index', compact('destinations'));
    }
    public function login()
    {
        return view('admin.login');
    }
}
