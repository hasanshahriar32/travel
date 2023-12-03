<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $orders = Order::latest();
        if (!empty($request->get('keyword'))) {
            $orders = $orders->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $orders = $orders->paginate(6);
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|string|max:255',
            'destination_id' => 'required|string|max:255',
            'duration' => 'required|string|max:255',
            'phone' => 'required|string|max:20|regex:/^([0-9\s\-\+\(\)]*)$/|min:11',
            'payment_method' => 'required|string|max:25',
            'payment' => 'required|numeric',
            'transaction'=> 'string|max:255',
            'checkin'=> 'date',
        ]);

        $order = new Order();
        $order->name = $request->name;
        // $order->email = $request->email;
        $order->phone = $request->phone;
        $order->duration = $request->duration;
        $order->payment_method = $request->payment_method;
        $order->destination = $request->destination_id;
        $order->payment = $request->payment;
        $order->transaction = $request->transaction;
        $order->checkin = $request->checkin;
        $order->save();
        //dd($order);


        return redirect()->back()->with('success', 'Order created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function user(Request $request)
    {
        $users = User::latest();
        if (!empty($request->get('keyword'))) {
            $users = $users->where('name', 'like', '%' . $request->get('keyword') . '%');
        }
        $users = $users->paginate(6);
        return view('admin.user.index', compact('users'));
    }
}
