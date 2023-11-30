@extends('pages.layout.app')
@section('page-content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Destinations</h3>
                        <p>Pixel perfect design with awesome contents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    {{-- <!-- CSS here -->{{asset('page-assets/')}} --}}
    <div class="popular_places_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        @foreach ($destinations as $destination)

                            <div class="col-lg-4 col-md-4">
                                <div class="single_place">
                                    <div class="thumb" style="height: 200px">
                                        <img src="{{ Storage::url($destination->image) }}" alt="">

                                        <a href="#" class="prise"><i class="fa-solid fa-bangladeshi-taka-sign"></i>{{$destination->Price}} </a>
                                    </div>
                                    <div class="place_info">
                                        <a href="{{route('destination_details',$destination->id )}}">
                                            <h3>{{$destination->Name}}</h3>
                                        </a>
                                        <p>{{$destination->District}}</p>
                                        <div class="rating_days d-flex justify-content-between">
                                            <div class="days">
                                                <i class="fa fa-clock-o"></i>
                                                <a href="#">{{$destination->number}}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="col-lg-4 col-md-4">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('page-assets/img/place/2.png')}}" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>Korola Megna</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">4N3D</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('page-assets/img/place/3.png')}}" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>London</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">4N3D</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('page-assets/img/place/4.png')}}" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>Miami Beach</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">4N3D</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('page-assets/img/place/5.png')}}" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>California</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">4N3D</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="single_place">
                                <div class="thumb">
                                    <img src="{{asset('page-assets/img/place/6.png')}}" alt="">
                                    <a href="#" class="prise">$500</a>
                                </div>
                                <div class="place_info">
                                    <a href="destination_details.html"><h3>Saintmartine Iceland</h3></a>
                                    <p>United State of America</p>
                                    <div class="rating_days d-flex justify-content-between">
                                        <div class="days">
                                            <i class="fa fa-clock-o"></i>
                                            <a href="#">4N3D</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
