@extends('pages.layout.app')
@section('page-content')
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container mb-4">
                <div class="row">
                    <div class="booking-form mb-8">
                        <div class="form-header">
                            <h1 style="color: white;">Book Now</h1>
                        </div>
                        @if (Session::has('success'))
                            <div class="alert alert-success">
                                <strong>Success:</strong> {{ Session::get('success')}}
                            </div>
                        @endif
                        @if (Session::has('error'))
                            <div class="alert alert-danger">
                                <strong>Error:</strong> {{ Session::get('error') }}
                            </div>
                        @endif
                        @php
                            use Illuminate\Support\Facades\Auth;
                        @endphp
                        @if (Auth::check())
                            @php

                                $user = Auth::user();
                                // dd($user->name);
                            @endphp
                        @else
                            @php
                                //dd('not logged in');
                                return redirect()->route('login');
                            @endphp
                        @endif



                        <form method="POST" action="{{ route('booking.store') }}">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <input name="name" type="hidden" class="form-control" type="text"
                                            placeholder="Enter your name" value="{{ $user->name }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <input name="destination_id" type="hidden" class="form-control" type="text"
                                            placeholder="Enter your destination" value="{{ $destination->id }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Phone</span>
                                        <input name="phone" class="form-control" type="tel"
                                            placeholder="Enter your phone number">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Duration</span>
                                        <input name="duration" class="form-control" type="text"
                                            placeholder="Enter how many days">
                                    </div>
                                </div>

                            </div>

                            {{-- <div class="form-group">
                                <span class="form-label">Pickup Location</span>
                                <input class="form-control" type="text" placeholder="Enter ZIP/Location">
                            </div> --}}

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <span class="form-label">Payment method</span>
                                        <select name="payment_method" class="form-control">
                                            <option value="Bkash">Bkash</option>
                                            <option value="Paypal">Paypal</option>
                                            <option value="Bitcoin">Bitcoin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label">Payment</span>
                                        <input name="payment" class="form-control" type="number"
                                            placeholder="Enter payment">
                                    </div>
                                </div>


                            </div>
                            <div class="form-btn">
                                <button class="submit">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('page-css')
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bookingg/css/bootstrap.min.css') }}" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bookingg/css/style.css') }}" />

    <style>
        /* Add this CSS to your stylesheets */


        .booking-form {
            width: 100%;
            max-width: 600px;

            /* Adjust width as needed */
            margin: 0 auto;
            padding-top: 5px;
            padding-bottom: 5px;
            /* background: #f9f9f9; */
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
@endsection
