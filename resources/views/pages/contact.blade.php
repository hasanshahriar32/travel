@extends('pages.layout.app')
@section('page-content')
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_4" style="background-image: url(./page-assets/img/banner/contact.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>contact Us</h3>
                        <p>We are here for <span style="color: red ;">YOU</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Write here</h2>
                </div>
                <div class="col-lg-8">
                    <form  action="https://formspree.io/f/meqbbgej" class="form-control" method="POST" id="contactForm"
                        novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" type="text" cols="30" rows="9"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pesan Anda'" placeholder=" Describe here in details " required="" ></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name' "
                                        placeholder="Name"
                                        required=""/>
                                        <input type="hidden" name="_subject" id="email-subject" value=" Form Submission">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" required=""
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Anda'"
                                        placeholder="Email" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">
                                Send
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Escaton,banglamotor</h3>
                            <p>1120 Dhaka/Block D</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+880 152 147 4251</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>kazol196295@gmail.com</h3>
                            <h3>abrar068@gmail.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- ================ contact section end ================= -->


@endsection
