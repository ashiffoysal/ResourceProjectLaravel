<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $companyInformation->company_name }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta property="og:type" content="website" />
    <meta name="keywords" content="{{ $seo->meta_keyword }}" />
    <meta name="author" content="{{ $seo->meta_author }}">
    <meta property="og:url" content="https://merithub.co.uk" />
    <meta property="og:site_name" content="" />
    <meta property="og:title" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/',$logo->favicon) }}">
    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/slick.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/sal.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/feather.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animation.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    <!-- include summernote css/js -->
 
</head>

<body class="rbt-header-sticky">

    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <img src="{{ asset('frontend') }}/assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="{{ asset('frontend') }}/assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- Start Header Area -->
    @include('frontend.include.header')
    <!-- Mobile Menu Section -->
    <main class="rbt-main-wrapper">
        <!-- Start Banner Area -->
        @yield('content')
        <!-- Start Footer aera -->
        @include('frontend.include.footer')
        <!-- End Copyright Area  -->
    </main>
    <!-- End Page Wrapper Area -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/sal.js"></script>
    <!-- Dark Mode Switcher -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/js.cookie.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/swiper.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-appear.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/odometer.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/backtotop.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/isotop.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/imageloaded.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/vendor/wow.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/waypoint.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/easypie.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/text-type.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-ui.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/magnify-popup.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/paralax-scroll.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/paralax.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/countdown.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':

                    toastr.options.timeOut = 10000;
                    toastr.info("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();
                    break;
                case 'success':

                    toastr.options.timeOut = 10000;
                    toastr.success("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'warning':

                    toastr.options.timeOut = 10000;
                    toastr.warning("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'error':

                    toastr.options.timeOut = 10000;
                    toastr.error("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
            }
        @endif
    </script>
    
</body>

</html>