<!DOCTYPE html>
<html>

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Contech Id | {{ $title }}</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Contech Id">
    <meta name="author" content="contech.id">
    <meta name="language" content="id">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="copyright" content="Kembangin Teknologi Kita">
    <meta name="geo.placename" content="Indonesia">
    <meta name="contact" content="contech.id@gmail.com">

    <meta property="og:title" content="Jasa pembuatan website">
    <meta property="og:description"
        content="Perusahaan penyedia jasa pembuatan website yang didedikasikan untuk membantu membangun bisnis di era modern seperti sekarang. Tim pengembang dan perancang berpengalaman kami bekerja sama untuk membuat situs web khusus yang memenuhi kebutuhan dan tujuan unik klien kami.">
    <meta property="og:image" content="https://contech.id/image/thumbnail.jpg">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://contech.id">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/image/favicon.ico') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-elements.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-blog.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-shop.css') }}">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/circle-flip-slideshow/css/component.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    @yield('css')

    <style>
        .contech {
            animation: con 2s alternate infinite ease-in-out;
        }

        @keyframes con {
            from {
                transform: translateY(-25px);
            }

            to {
                transform: translateY(0px);
            }
        }

        @media only screen and (min-width: 500px) {
            #home-intro {
                margin-bottom: 60px;
            }
        }

        @media only screen and (max-width: 500px) {
            .contech {
                width: 200px;
            }

            #home-intro {
                margin-bottom: 0;
            }
        }
    </style>

    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.min.js') }}"></script>

</head>

<body data-plugin-page-transition class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay
    data-plugin-options="{'hideDelay': 500, 'effect': 'floatRings'}">

    <div class="body">
        @include('partials.navbar')

        @yield('content')

        @include('partials.footer')
    </div>


    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <!-- Circle Flip Slideshow Script -->
    <script src="{{ asset('assets/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/particles/particles.min.js') }}"></script>

    <!-- Current Page Views -->
    <script src="{{ asset('assets/js/views/view.home.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('assets/js/theme.init.js') }}"></script>
    <script src="{{ asset('assets/js/examples/examples.particles.js') }}"></script>
</body>

</html>
