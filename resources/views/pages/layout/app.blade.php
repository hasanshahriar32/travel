<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Travelia</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/5b234f7ad3.js" crossorigin="anonymous"></script>
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('page-assets/img/favicon.png') }}" />
    <!-- Place favicon.ico in the root directory -->

    {{-- <!-- CSS here -->{{asset('page-assets/')}} --}}
    <link rel="stylesheet" href="{{ asset('page-assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/gijgo.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('page-assets/css/slicknav.css') }}" />
    <link rel="stylesheet"
        href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />

    <link rel="stylesheet" href="{{ asset('page-assets/css/style.css') }}" />
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    {{-- //////////////////laravel css////////////////////////// --}}

    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('build/assets/app.ac31adfe.css') }}">
    <script src="{{ asset('build/assets/app.d225c007.js') }}"></script>
    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- //////////////////////////////////////////// --}}



    @yield('page-css')
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('index') }}">
                                        <img width="100%" src="{{ asset('page-assets/img/travelo.png') }}"
                                            alt="" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li>
                                                <a class="active" href="{{ route('index') }}">home</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about') }}">About</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('travel_destination') }}">Destination</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact') }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">


                                    <div class="number">
                                        <p>
                                            <i class="fa fa-phone"></i>
                                            +8801521474251
                                        </p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-linkedin"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="https://www.facebook.com/kazol.196295/">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="dropdown">
                                        <button class="btn dropdown-toggle d-none d-xl-block" type="button"
                                            id="profileDropdown" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa-solid fa-user"></i>
                                        </button>
                                        @php
                                            use Illuminate\Support\Facades\Auth;
                                            $admin = Auth::user();
                                            // dd($admin->name);
                                        @endphp
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="profileDropdown">
                                            @if ($admin)
                                                <h5 class="dropdown-item">Hello, {{ $admin->name }}</h5>
                                            @endif

                                            @php
                                                // Assuming $user->role contains the user's role (e.g., 2 for admin)
                                                $userRole = $admin->role ?? null;
                                            @endphp

                                            @if ($userRole === 2)
                                                <a class="dropdown-item"
                                                    href="{{ route('admin.dashboard') }}">Dashboard</a>
                                            @endif

                                            <a class="dropdown-item" href="#">Settings</a>
                                            @if (!Auth::check())
                                                <a class="dropdown-item" href="{{ route('login') }}">Login</a>
                                            @endif

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit"
                                                    class="dropdown-item btn btn-link nav-link">Logout</button>
                                            </form>
                                            <!-- Add more dropdown items as needed -->
                                        </div>
                                    </div>
                                    <div class="search_icon ">
                                        <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                    </div>

                                </div>

                                {{-- <div class="search_icon ">
                                    <a data-toggle="modal" data-target="#exampleModalCenter" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div> --}}



                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- header-end -->

    @yield('page-content')

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img width="75%" src="{{ asset('page-assets/img/travelo.png') }}"
                                        alt="" />
                                </a>
                            </div>
                            <p>
                                5th florepgbazar ,Modhubag <br />
                                Dhaka <br />
                                <a href="#">+8801521474251</a> <br />
                                <a href="#">kazol196295@gmail.com</a>
                                <a href="#">abrar068@gmail.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">Company</h3>
                            <ul class="links">
                                <li><a href="#">Pricing</a></li>
                                <li><a href="{{ Route('about') }}">About</a></li>
                                <li><a href="#"> Gallery</a></li>
                                <li><a href="#"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">Popular destination</h3>
                            <ul class="links double_links">
                                <li><a href="#">Dhaka</a></li>
                                <li><a href="#">Sylhet</a></li>
                                <li><a href="#">Coxs bazar</a></li>
                                <li><a href="#">Bandorban</a></li>
                                <li><a href="#">Chattogram</a></li>
                                <li><a href="#">Khulna</a></li>
                                <li><a href="#">Barishal</a></li>
                                <li><a href="#">Rangpur</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">Instagram</h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('page-assets/img/instagram/1.png') }}" alt="" />
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('page-assets/img/instagram/2.png') }}" alt="" />
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('page-assets/img/instagram/3.png') }}" alt="" />
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('page-assets/img/instagram/4.png') }}" alt="" />
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('page-assets/img/instagram/5.png') }}" alt="" />
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{ asset('page-assets/img/instagram/6.png') }}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved by our team Abrar and kazol |
                            <i class="fa fa-heart-o" aria-hidden="true"></i>

                            {{-- <a href="https://colorlib.com" target="_blank">Colorlib</a> --}}
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="{{route('travel_destination')}}">
                    <div class="serch_form">
                        <input type="search" name="search" placeholder="Search"  />
                        <button type="submit">search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- link that opens popup -->
    <!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script
        src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js">
    </script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
    <!-- JS here -->
    <script src="{{ asset('page-assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('page-assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/scrollIt.js') }}"></script>
    <script src="{{ asset('page-assets/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/plugins.js') }}"></script>
    <script src="{{ asset('page-assets/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/slick.min.js') }}"></script>

    <!--contact js-->
    <script src="{{ asset('page-assets/js/contact.js') }}"></script>
    <script src="{{ asset('page-assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('page-assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('page-assets/js/mail-script.js') }}"></script>

    <script src="{{ asset('page-assets/js/main.js') }}"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-caret-down"></span>',
            },
        });
    </script>
    @yield('page-js')
</body>

</html>
