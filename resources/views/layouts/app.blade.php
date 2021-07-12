<!DOCTYPE html>
<html lang="en">

<head>
    <title>Odyssey Nepal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/logo.png') }}">
    <!-- Load Require CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Font CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/boxicon.min.css') }}">
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css') }}">
    <!-- Load Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/responsive.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">


</head>

<body>

    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="{{ url('/') }}">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <img class="nav_logo" src="{{ URL::asset('img/logo.png') }}">
                <span class="odyssey h4">Odyssey</span> <span class="odyssey h4">Nepal</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('about_us') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('gallery') }}">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('our_team') }}">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('departments') }}">Departments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ url('contact_us') }}">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    @guest
                    @if (Route::has('login'))
                    <div class="dropdown">
                        <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                    <a href="{{ route('login') }}" class="nav-link btn-outline-primary rounded-pill px-3">{{ __('Login') }}</a>
                                </li>
                                @endif

                                @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="nav-link btn-outline-primary rounded-pill px-3">{{ __('Register') }}</a>
                                </li>
                                @endif
                                @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle rounded-pill" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="top: -3px; position: relative;" v-pre>
                                        {{ Auth::user()->username }}
                                    </a>

                                    <div class="dropdown-content" style="left: -70px;">
                                        <a class="nav-link btn-outline-primary rounded-pill px-3" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                    <!-- <a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->


    <!-- Load Main Content Container -->
    @yield('content')
    <!-- Main content End -->



    <!-- Start Footer -->

    <footer class="bg-secondary pt-4">
        <div class="container">
            <div class="row py-4">

                <div class="col-lg-4 col-12 align-left">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- <i class='bx bx-buildings bx-sm text-light'></i> -->
                        <img class="nav_logo" src="{{ URL::asset('img/logo.png') }}" style="background: #fff;border: 1px solid white; border-radius: 40px;">
                        <span class="text-light h5">Odyssey</span> <span class="text-light h5 semi-bold-600">Nepal</span>
                    </a>
                    <p class="text-light my-lg-4 my-2">
                        You can connect us through these social sites.
                    </p>
                    <ul class="list-inline footer-icons light-300">
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.facebook.com/odysseyynepal">
                                <i class='bx bxl-facebook-square bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://twitter.com/NepalOdyssey/status/1400059472026820609?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3ANepalOdyssey%7Ctwgr%5EeyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3R3ZWV0X2VtYmVkX2NsaWNrYWJpbGl0eV8xMjEwMiI6eyJidWNrZXQiOiJjb250cm9sIiwidmVyc2lvbiI6bnVsbH19%7Ctwcon%5Etimelinechrome&ref_url=https%3A%2F%2Flocalhost%2Fodyssey%2Findex.php">
                                <i class='bx bxl-twitter bx-md'></i>
                            </a>
                        </li>
                        <li class="list-inline-item m-0">
                            <a class="text-light" target="_blank" href="https://www.instagram.com/odysseyynepal/?fbclid=IwAR0lltjzHYv6y_BKoWVEVWKK5A217zo3RT-B5B8EX99M890VWSRqLKUnaV4">
                                <i class='bx bxl-instagram bx-md'></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-5 col-md-4 my-sm-0 mt-4">
                    <h3 class="h4 pb-lg-3 text-light light-300">Quick Links</h3>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ url('about_us') }}">About Us</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ url('gallery') }}">Gallery</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ url('our_team') }}">Our Team</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ url('departments') }}">Departments</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="{{ url('contact_us') }}">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Contact</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:+977 980-8429293">+977 980-8429293</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:odysseynepal@outlook.com">odysseynepal@outlook.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Odyssey Nepal. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>Bijen Shrestha</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <!-- Load jQuery require for isotope -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ URL::asset('js/isotope.pkgd.js') }}"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });
    </script>
    <!-- Templatemo -->
    <script src="{{ URL::asset('js/templatemo.js') }}"></script>
    <!-- Custom -->
    <script src="{{ URL::asset('js/custom.js') }}"></script>
    <!-- Facebook -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="XanR8BdA"></script>

</body>

</html>