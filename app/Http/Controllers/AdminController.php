<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::user();
        $user = User::count();
        $order = Order::count();
        //dd($order);
        
        //echo 'hello '. $admin->name . ' welcome to your dashboard' ;
        return view('admin.dashboard ', compact('admin','order','user'));
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
