@extends('pages.layout.app')

@section('page-content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            @foreach ($destinations as $destination)
                <div style="background-image: url('{{ Storage::url($destination->image) }}')"
                    class="single_slider d-flex align-items-center overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <div class="slider_text text-center">
                                    <h3>{{ $destination->Name }}</h3>
                                    <p>Pixel perfect design with awesome contents</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div style="background-image: url(./page-assets/img/banner/dhaka.jpg)"
                class="single_slider d-flex align-items-center overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>Dhaka</h3>
                                <p>Pixel perfect design with awesome contents</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image: url(./page-assets/img/banner/sylhet.jpg)"
                class="single_slider d-flex align-items-center overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>sylhet</h3>
                                <p>Pixel perfect design with awesome contents</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- destination -->
    <div class="popular_places_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Popular Destination</h3>
                        <p>
                            You can find the most popular destination here. You can
                            choose your destination and make a plan for your next
                            vacation.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col-lg-4 col-md-6">
                        <div class="single_place">
                            <div class="thumb" style="height: 200px;">
                                <img src="{{ Storage::url($destination->image) }}" alt="" />
                                <a href="#" class="prise">${{$destination->Price}}</a>
                            </div>
                            <div class="place_info">
                                <a href="{{route('destination_details',$destination->id )}}">
                                    <h3>{{$destination->Name}} </h3>
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
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('page-assets/img/place/1.png') }}" alt="" />
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>Lombok</h3>
                            </a>
                            <p>Nusa Tenggara Barat</p>
                            <div class="rating_days d-flex justify-content-between">
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">5N4D</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('page-assets/img/place/2.png') }}" alt="" />
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>Kuta</h3>
                            </a>
                            <p>Bali</p>
                            <div class="rating_days d-flex justify-content-between">
                                <div class="days">
                                    <i class="fa fa-clock-o"></i>
                                    <a href="#">4N3D</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('page-assets/img/place/3.png') }}" alt="" />
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>London</h3>
                            </a>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('page-assets/img/place/4.png') }}" alt="" />
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>Miami Beach</h3>
                            </a>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('page-assets/img/place/5.png') }}" alt="" />
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>California</h3>
                            </a>
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
                <div class="col-lg-4 col-md-6">
                    <div class="single_place">
                        <div class="thumb">
                            <img src="{{ asset('page-assets/img/place/6.png') }}" alt="" />
                            <a href="#" class="prise">$500</a>
                        </div>
                        <div class="place_info">
                            <a href="destination_details.html">
                                <h3>Saintmartine Iceland</h3>
                            </a>
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
    <!-- end -->

    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('page-assets/img/svg_icon/1.svg') }}" alt="" />
                        </div>
                        <h3>Comfortable Journey</h3>
                        <p>
                            A wonderful serenity has taken to the possession of my entire
                            soul.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('page-assets/img/svg_icon/2.svg') }}" alt="" />
                        </div>
                        <h3>Luxuries Hotel</h3>
                        <p>
                            A wonderful serenity has taken to the possession of my entire
                            soul.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="{{ asset('page-assets/img/svg_icon/3.svg') }}" alt="" />
                        </div>
                        <h3>Travel Guide</h3>
                        <p>
                            A wonderful serenity has taken to the possession of my entire
                            soul.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{ asset('page-assets/img/testmonial/author.png') }}"
                                                alt="" />
                                        </div>
                                        <p>
                                            "Working in conjunction with humanitarian aid agencies,
                                            we have supported programmes to help alleviate human
                                            suffering.
                                        </p>
                                        <div class="testmonial_author">
                                            <h3>- Micky Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{ asset('page-assets/img/testmonial/author.png') }}"
                                                alt="" />
                                        </div>
                                        <p>
                                            "Working in conjunction with humanitarian aid agencies,
                                            we have supported programmes to help alleviate human
                                            suffering.
                                        </p>
                                        <div class="testmonial_author">
                                            <h3>- Tom Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="{{ asset('page-assets/img/testmonial/author.png') }}"
                                                alt="" />
                                        </div>
                                        <p>
                                            "Working in conjunction with humanitarian aid agencies,
                                            we have supported programmes to help alleviate human
                                            suffering.
                                        </p>
                                        <div class="testmonial_author">
                                            <h3>- Jerry Mouse</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->
@endsection
