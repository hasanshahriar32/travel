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
                        @php
                            $user = Auth::user();
                        @endphp
                        <form method="POST" action="{{route('booking.store')}}" >
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        {{-- <span class="form-label">Name</span> --}}
                                        <input name="name" type="hidden" class="form-control" type="text"
                                            placeholder="Enter your name" value="{{$user->name}}" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <input name="email" type="hidden" class="form-control" type="email"
                                            placeholder="Enter your email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <input name="destination" type="hidden" class="form-control" type="text"
                                            placeholder="Enter your destination" value="{{$destionation->Name}}">
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
                                        <input name="duration" class="form-control" type="decimal"
                                            placeholder="Enter how many days">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <span class="form-label">Pickup Location</span>
                                <input class="form-control" type="text" placeholder="Enter ZIP/Location">
                            </div>

                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <span class="form-label">Payment method</span>
                                        <select name="payment_method" class="form-control" >
                                            <option value="Bkash" >Bkash</option>
                                            <option value="Paypal">Paypal</option>
                                            <option value="Bitcoin">Bitcoin</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="form-btn">
                                <button class="submit-btn">Book Now</button>
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
