@extends('pages.layout.app')
@section('page-content')


    {{-- <div style="background-image: url('{{ Storage::url($destinations->image) }}')"
        class="single_slider d-flex align-items-center overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 col-md-12">
                    <div class="slider_text text-center">
                        <h3>{{ $destinations->name }}</h3>
                         <p>Pixel perfect design with awesome contents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <div style="background-image: url('{{ Storage::url($image->image_path) }}')"
                class="single_slider d-flex align-items-center overlay">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-12 col-md-12">
                            <div class="slider_text text-center">
                                <h3>{{ $destinations->name }}</h3>
                             <p>Pixel perfect design with awesome contents</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
    @if ($images->count() > 0)
    <div class="slider_area">
        <div class="slider_active owl-carousel">
            @foreach ($images as $image)
                <div style="background-image: url('{{ Storage::url($image->image_path) }}')"
                    class="single_slider d-flex align-items-center overlay">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-md-12">
                                <div class="slider_text text-center">
                                    <h3>{{ $destinations->Name }}</h3>
                                    <p>Pixel perfect design with awesome contents</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @endif
    {{-- <div class="destination_banner_wrap overlay">
        <div class="destination_text text-center">
            <h3>{{ $destinations->Name }} </h3>
            <p>Pixel perfect design with awesome contents</p>
        </div>
    </div> --}}

    <div class="destination_details_info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="destination_info">
                        <h3>Description</h3>
                        <p>
                            {{ $destinations->Description }}
                        </p>
                        <p>
                            Variations of passages of lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected
                            humour, or randomised words which don't look even slightly
                            believable. If you are going to use a passage of Lorem Ipsum,
                            you need to be sure there isn't anything embarrassing.
                            {{-- </p>
                        <div class="single_destination">
                            <h4>Day-01</h4>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form, by injected humour, or randomised words.
                            </p>
                        </div>
                        <div class="single_destination">
                            <h4>Day-02</h4>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form, by injected humour, or randomised words.
                            </p>
                        </div>
                        <div class="single_destination">
                            <h4>Day-03</h4>
                            <p>
                                There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered alteration in some
                                form, by injected humour, or randomised words.
                            </p>
                        </div> --}}
                    </div>
                    <div class="bordered_1px"></div>
                    <div class="contact_join">
                        <a href="{{ route('booking', $destinations->id) }}" class="btn alert-danger text-center">Book
                            Now</a>
                        <h3 class="text-center"> Want to contact ?</h3>
                        {{-- <Button>Book now </Button> --}}
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="submit_btn">
                                        <a href="https://wa.link/sdftme" class="boxed-btn4 d-block"><i
                                                class="fa fa-whatsapp"></i>
                                            Whatsapp</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
