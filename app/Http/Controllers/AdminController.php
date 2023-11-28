<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
        //echo 'hello '. $admin->name . ' welcome to your dashboard' ;
        return view('admin.dashboard ', compact('admin'));
    }
    public function logout()
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } else {
            Auth::logout();
        }

        return redirect()->route('index');
    }
}
