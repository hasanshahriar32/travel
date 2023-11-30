@extends('pages.layout.app')
@section('page-content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        {{-- <h3>About Us</h3> --}}
                        {{-- <p>Pixel perfect design with awesome contents</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <div class="about_story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="story_heading">
                        <h3>Our Story</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <p>
                                            <img src="{{asset('bookingg/img/kazol.jpg')}}" style="height: 200px;" alt="">
                                            <br>
                                            <h3>Kazol</h3>
                                            <br>
                                            Kazol, an intrepid soul with a passion for discovering the intricacies of
                                            diverse cultures and hidden gems, embodies the spirit of exploration. Her
                                            insatiable curiosity drives her to seek the uncharted territories of
                                            Bangladesh's 64 districts, eager to unravel their tales and share their wonders
                                            with the world. With an eye for detail and a heart captivated by the beauty of
                                            every landscape, Kazol embraces each journey as an opportunity to unearth
                                            stories waiting to be told.


                                        </p>
                                        <p>
                                            <img src="{{asset('bookingg/img/abrar.jpg')}}" style="height: 200px;" alt="">
                                            <br>
                                            <h3>Abrar</h3>
                                            <br>
                                            Abrar, a fervent advocate for immersive travel experiences, believes in the
                                            power of exploration to transcend boundaries and ignite a profound connection
                                            with the world. His penchant for adventure intertwines with his dedication to
                                            uncovering the richness of Bangladesh's cultural tapestry. Driven by a desire to
                                            showcase the essence of each district, Abrar traverses the landscapes, capturing
                                            the essence of local traditions, people, and scenic marvels, endeavoring to
                                            encapsulate their spirit through Travelia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
