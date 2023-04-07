<!DOCTYPE html>
<html class="disable-onload-scroll overflow-hidden"
    data-style-switcher-options="{'changeLogo': false, 'colorPrimary': '#17BAF5', 'colorSecondary': '#17AEF5', 'colorTertiary': '#2baab1', 'colorQuaternary': '#383f48'}">

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Contech Id | {{ $title }}</title>

    <meta name="keywords" content="WebSite Template" />
    <meta name="description" content="Contech Id | About Us">
    <meta name="author" content="okler.net">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/image/favicon.ico') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <!-- Web Fonts  -->
    <link id="googleFonts"
        href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400&display=swap"
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

    <!-- Skin CSS -->
    <link id="skinCSS" rel="stylesheet" href="{{ asset('assets/css/default.css') }}">

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Head Libs -->
    <script src="{{ asset('assets/vendor/modernizr/modernizr.min.js') }}"></script>

    <style>
        .updown {
            animation: updown 1.5s infinite alternate;
        }

        @keyframes updown {
            from {
                transform: translateY(-10px);
            }

            to {
                transform: translateY(5px);
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
</head>

<body data-plugin-section-scroll
    data-plugin-options="{'targetClass': '.section-scroll', 'dotsClass': 'section-scroll-dots-navigation-colored', 'changeHeaderLogo': true, 'headerLogoDark': '{{ asset('assets/image/logo/logo contech horizontal.png') }}', 'headerLogoLight': '{{ asset('assets/image/logo/contech-putih-icon.png') }}'}">
    <div class="body bg-dark">

        <header id="header" class="header-transparent"
            data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': false, 'stickyStartAt': 0}">
            <div class="header-body border-top-0 box-shadow-none">
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img alt="Porto" width="140"
                                            src="{{ asset('assets/image/logo/contech-putih-icon.png') }}">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div
                                    class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                                    <div
                                        class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li>
                                                    <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                        href="{{ route('home.index') }}">
                                                        Home
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('about.index') ? 'active' : '' }}"
                                                        href="{{ route('about.index') }}">
                                                        About Us
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                        class="dropdown-toggle" href="{{ route('services.index') }}">
                                                        Services
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                        href="{{ route('product.index') }}">
                                                        Product
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                        href="{{ route('blog.index') }}">
                                                        Blog
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                        href="{{ route('portofolio.index') }}">
                                                        Portofolio
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link text-capitalize font-weight-semibold custom-text-3"
                                                        href="{{ route('contact.index') }}">
                                                        Contact Us
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                        data-bs-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                                <div
                                    class="header-nav-features header-nav-features-light header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                                    <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                        <a href="https://crm.kembangin.id" target="_blank"><button
                                                class="btn btn-tertiary"><i class="fas fa-cog fa-spin"></i>
                                                CRM</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div role="main" class="main">
            <section class="section section-scroll section-background border-0 p-0 m-0"
                data-section-scroll-title="Tentang Kami" data-section-scroll-header-color="light"
                style="height: fit-content; background-image: linear-gradient(to right bottom, #ff0068, #d90071, #b00075, #840073, #570a6a, #450d67, #310f64, #191060, #1b1168, #1d1370, #1f1479, #211581);">
                <div id="particles-1" class="d-none"></div>
                <div id="particles-2" class="d-none"></div>
                <div id="particles-3" class="d-none"></div>
                <div id="particles-4" class="position-absolute w-100 h-100 top-0 left-0 appear-animation"
                    data-appear-animation="slideInUp"></div>
                <div class="container pt-1 h-100 d-flex justify-content-center align-content-center">
                    <div class="row py-4 mb-2">
                        <div class="col-md-7 order-2 my-auto">
                            <div class="overflow-hidden mb-4">
                                <h2 class="text-color-primary font-weight-bold text-12 mb-3 pt-0 mt-0 appear-animation"
                                    data-appear-animation="maskUp" style="text-shadow: 3px 4px 7px rgba(0,0,0);"
                                    data-appear-animation-delay="300">Tentang Kami</h2>
                            </div>
                            <p class="lead appear-animation text-color-light" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="700"><span
                                    class="text-color-primary font-weight-semibold">Contech.id</span> adalah perusahaan
                                penyedia jasa pembuatan website yang didedikasikan untuk membantu membangun bisnis di
                                era modern seperti sekarang. Tim pengembang dan perancang berpengalaman kami bekerja
                                sama untuk membuat situs web khusus yang memenuhi kebutuhan dan tujuan unik klien kami.
                                Dengan fokus pada pengalaman pengguna, aksesibilitas, dan pengoptimalan mesin telusur,
                                kami memastikan bahwa setiap situs web yang Kami buat memberikan hasil baik.</p>
                            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="900">
                            <div class="row align-items-center appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                                <div class="col-lg-6">
                                    <a href="#" class="btn btn-modern btn-primary mt-3">Hubungi Kami</a>
                                </div>
                                <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                                    <ul class="social-icons float-lg-end">
                                        <li class="social-icons-facebook"><a href="#" target="_blank"
                                                title="Facebook"><i class="fab fa-facebook-f text-2"></i></a></li>
                                        <li class="social-icons-instagram"><a
                                                href="https://www.instagram.com/contech.id/" target="_blank"
                                                title="instagram"><i class="fab fa-instagram text-2"></i></a></li>
                                        <li class="social-icons-linkedin"><a href="#" target="_blank"
                                                title="Linkedin"><i class="fab fa-linkedin-in text-2"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 order-md-2 appear-animation my-auto"
                            data-appear-animation="fadeInRightShorter">
                            <div class="position-relative py-5 justify-content-center">
                                <div class="d-flex justify-content-center" data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                    <img src="{{ asset('assets/image/logo/logo icon putih contech.png') }}"
                                        class="contech img-fluid justify-content-center updown" alt="optibis" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-scroll bg-light border-0 p-lg-0 m-0"
                data-section-scroll-title="Pilihan Terbaik" data-section-scroll-header-color="dark"
                style="background-image: url('{{ asset('assets/image/bg/optibis-main.jpg') }}'); background-repeat: no-repeat;">
                <div class="d-flex flex-column h-100 pt-5 pt-lg-0">
                    <div class="h-75">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-lg-6 mb-5 mb-lg-0">
                                    <img src="{{ asset('assets/image/logo/optibis-working.png') }}"
                                        class="img-fluid appear-animation" data-appear-animation="fadeIn"
                                        alt="" />
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="font-weight-bold line-height-1 text-12 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                                        Mengapa anda harus Memesan di <span
                                            class="text-color-primary">Contech.Id?</span></h2>
                                    <p class="line-height-7 text-4 mb-4 pb-3 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                                        <span class="text-color-primary">Contech.Id?</span> siap memenuhi kebutuhan
                                        Anda untuk membangun bisnis menjadi bisa bersaing di era sekarang yang serba
                                        digital. Disini Kami hadir untuk membangun interface perusahaan dengan website
                                        berkualitas dan pastinya menarik agar client bisa tertarik kepada bisnis Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="justify-self-end container border border-color-primary border-sm-none border-bottom-0 border-end-0 border-start-0 h-25">
                        <div class="container h-100">
                            <div class="row align-items-center h-100 pt-0">
                                <div class="col">
                                    <h4 class="font-weight-extra-bold mb-4 text-center">
                                        <b class="text-5 text-primary d-block line-height-1 font-weight-extra-bold appear-animation"
                                            data-appear-animation="blurIn" data-appear-animation-delay="250"
                                            data-appear-animation-duration="750">KLIEN KAMI</b>
                                        <span class="font-weight-bold text-3 text-lg-5 appear-animation"
                                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600"
                                            data-appear-animation-duration="750">100+ Bisnis Telah Menggunakan Layanan
                                            Kami.</span>
                                    </h4>
                                    <div class="owl-carousel owl-theme mb-0"
                                        data-plugin-options="{'responsive': {'0': {'items': 3}, '476': {'items': 3}, '768': {'items': 3}, '992': {'items': 5}, '1200': {'items': 5}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                                        <div>
                                            <a href="https://amaninatour.com" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/amanina-tour.png') }}"
                                                    alt="Amanina Tour"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid" src="{{ asset('assets/image/client/avion.png') }}"
                                                alt="Avion">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/avistro.png') }}" alt="Avistro">
                                        </div>
                                        <div>
                                            <img class="img-fluid" src="{{ asset('assets/image/client/bplus.png') }}"
                                                alt="BPlus">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/bangkit.png') }}" alt="Bangkit">
                                        </div>
                                        <div>
                                            <img class="img-fluid" src="{{ asset('assets/image/client/bbs.png') }}"
                                                alt="BBS">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/beblex.png') }}" alt="Beblex">
                                        </div>
                                        <div>
                                            <a href="https://bmmttravel.com" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/bmmt.png') }}"
                                                    alt="BMMT"></a>
                                        </div>
                                        <div>
                                            <a href="https://bonekaku.co.id" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/bonekaku.png') }}"
                                                    alt="Bonekaku"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid" src="{{ asset('assets/image/client/bri.png') }}"
                                                alt="BRI">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/bubu-dolphin.png') }}"
                                                alt="Bubu Dolphin">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/caffein-coffee.png') }}"
                                                alt="Caffein Coffee">
                                        </div>
                                        <div>
                                            <a href="https://contech.id" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/contech.png') }}"
                                                    alt="Contech"></a>
                                        </div>
                                        <div>
                                            <a href="https://dbeyond.co.id" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/dbeyond.png') }}"
                                                    alt="DBeyond"></a>
                                        </div>
                                        <div>
                                            <a href="https://www.partaigelora.id" target="_blank"><img
                                                    class="img-fluid"
                                                    src="{{ asset('assets/image/client/gelora.png') }}"
                                                    alt="Partai Gelora"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid" src="{{ asset('assets/image/client/gng.png') }}"
                                                alt="Go n GO">
                                        </div>
                                        <div>
                                            <a href="https://gudangpesta.com" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/gudang-pesta.png') }}"
                                                    alt="Gudang Pesta"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/heyday.png') }}" alt="Heyday">
                                        </div>
                                        <div>
                                            <a href="https://hidayatur.id" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/hidayatur.png') }}"
                                                    alt="Hidayatur"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/indo-mulia.png') }}"
                                                alt="Indo Mulia">
                                        </div>
                                        <div>
                                            <img class="img-fluid" src="{{ asset('assets/image/client/inuum.png') }}"
                                                alt="Inuum">
                                        </div>
                                        <div>
                                            <a href="https://istanayatim.org" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/istana-yatim.png') }}"
                                                    alt="Istana Yatim"></a>
                                        </div>
                                        <div>
                                            <a href="https://kampoengkoneng.com" target="_blank"><img
                                                    class="img-fluid"
                                                    src="{{ asset('assets/image/client/kampoeng-koneng.png') }}"
                                                    alt="Kampoeng Koneng"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/kubukami.png') }}" alt="Kubukami">
                                        </div>
                                        <div>
                                            <a href="https://leica-geosystems.com" target="_blank"><img
                                                    class="img-fluid"
                                                    src="{{ asset('assets/image/client/leica.png') }}"
                                                    alt="Leica Geosystems"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/madiana.png') }}" alt="Madiana">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/medglow.png') }}" alt="Medglow">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/shafone.png') }}" alt="Shafone">
                                        </div>
                                        <div>
                                            <a href="https://www.mitrayatim.org" target="_blank"><img
                                                    class="img-fluid"
                                                    src="{{ asset('assets/image/client/mitra-yatim.png') }}"
                                                    alt="Mitra Yatim"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/roro-mendut.png') }}"
                                                alt="Roro Mendut">
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/sahrin-hamid.png') }}"
                                                alt="Sahrin Hamid">
                                        </div>
                                        <div>
                                            <a href="https://tenang.co.id/" target="_blank"><img class="img-fluid"
                                                    src="{{ asset('assets/image/client/tenang-food.png') }}"
                                                    alt="Tenang Food"></a>
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                src="{{ asset('assets/image/client/triptees.png') }}" alt="Triptees">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-scroll section-background border-0 m-0 p-0"
                data-section-scroll-title="Keuntungan" data-section-scroll-header-color="light"
                style="background-image: linear-gradient(to left top, #ff0068, #d90071, #b00075, #840073, #570a6a, #450d67, #310f64, #191060, #1b1168, #1d1370, #1f1479, #211581);">
                <div id="particles-partic" class="p-absolute w-100 h-100"></div>
                <div class="container h-100 d-flex align-items-center">
                    <div class="container position-relative">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6 mb-4 mb-lg-0">
                                <div class="custom-element custom-element-pos-3 appear-animation"
                                    data-appear-animation="expandIn" data-appear-animation-delay="200">
                                    <div class="transition-magnetic" data-plugin-hover-effect
                                        data-plugin-options="{'effect': 'magnetic'}">
                                        <span class="anim-hover-scale-1-2 transition-3ms d-inline-block">
                                            <img class="img-fluid" width="1000"
                                                src="{{ asset('assets/image/bg/people.png') }}" alt="">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 py-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="feature-box feature-box-style-5">
                                            <div class="feature-box-icon appear-animation"
                                                data-appear-animation="fadeInLeftShorterPlus"
                                                data-appear-animation-delay="100">
                                                <img width="100" src="image/logo/recomended.png" alt="" />
                                            </div>
                                            <div class="feature-box-info">
                                                <div class="overflow-hidden">
                                                    <h2 class="text-color-primary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation"
                                                        data-appear-animation="maskUp"
                                                        data-appear-animation-delay="100">Creative Idea</h2>
                                                </div>
                                                <p class="text-3-5 line-height-9 mb-5 appear-animation text-color-light"
                                                    data-appear-animation="fadeInUpShorterPlus"
                                                    data-appear-animation-delay="100">Design yang baik dapat
                                                    mempermudah penjualan produk anda.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="feature-box feature-box-style-5">
                                            <div class="feature-box-icon appear-animation"
                                                data-appear-animation="fadeInLeftShorterPlus"
                                                data-appear-animation-delay="100">
                                                <img width="100" src="image/logo/idea.png" alt="" />
                                            </div>
                                            <div class="feature-box-info">
                                                <div class="overflow-hidden">
                                                    <h2 class="text-color-primary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation"
                                                        data-appear-animation="maskUp"
                                                        data-appear-animation-delay="200">High Creative Minds</h2>
                                                </div>
                                                <p class="text-3-5 line-height-9 mb-5 appear-animation text-color-light"
                                                    data-appear-animation="fadeInUpShorterPlus"
                                                    data-appear-animation-delay="200">Produk anda menjadi lebih
                                                    berkualitas di mata costumer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="feature-box feature-box-style-5">
                                            <div class="feature-box-icon appear-animation"
                                                data-appear-animation="fadeInLeftShorterPlus"
                                                data-appear-animation-delay="100">
                                                <img width="100" src="image/logo/high.png" alt="" />
                                            </div>
                                            <div class="feature-box-info">
                                                <div class="overflow-hidden">
                                                    <h2 class="text-color-primary font-weight-semi-bold text-6 line-height-1 mb-2 pb-1 appear-animation"
                                                        data-appear-animation="maskUp"
                                                        data-appear-animation-delay="300">Multiple Rewards</h2>
                                                </div>
                                                <p class="text-3-5 line-height-9 mb-0 appear-animation text-color-light"
                                                    data-appear-animation="fadeInUpShorterPlus"
                                                    data-appear-animation-delay="300">Meningkatkan kredibilitas dimata
                                                    klien & costumer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="section section-background section-scroll overlay overlay-show overlay-op-9 border-0 m-0 text-center"
                data-section-scroll-title="Footer" data-section-scroll-header-color="light"
                style="background-image: linear-gradient(to right top, #ff0068, #cc0073, #930074, #570a6a, #160e55);">
                <div class="container h-100 py-5 py-md-0 mb-5 mb-md-0">
                    <div class="row align-items-center h-100 mb-5 mb-md-0">
                        <div class="col">
                            <img src="{{ asset('assets/image/logo/logo icon putih contech.png') }}" width="350"
                                class="contech mb-5 img-fluid justify-content-center" alt="optibis" />
                            <h4 class="my-3 text-lg-12 text-10 text-color-light">Let’s Get Started</h4>
                            <p class="mb-0 text-4">Dengan menggunakan promo konten, produk anda akan laris manis
                                dipasaran.</p>
                            <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                                class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3 mt-4">Hubungi
                                Kami</a>
                        </div>
                    </div>
                </div>

                <footer id="footer" class="bg-transparent border-0 position-absolute bottom-0 w-100">
                    <div class="container">
                        <div class="footer-copyright footer-copyright-style-2 bg-transparent pb-4">
                            <div class="py-2">
                                <div class="row py-4">
                                    <div class="col d-flex align-items-center justify-content-center mb-0">
                                        <p class="text-color-light text-3 opacity-4">© Copyright 2022 - <span
                                                class="text-color-primary">CONTECH.ID</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>

        </div>
    </div>


    <!-- Vendor -->
    <script src="{{ asset('assets/vendor/plugins/js/plugins.min.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="{{ asset('assets/js/theme.js') }}"></script>

    <script src="{{ asset('assets/vendor/particles/particles.min.js') }}"></script>

    <!-- Current Page Vendor and Views -->
    <script src="{{ asset('assets/js/views/view.contact.js') }}"></script>

    <!-- Theme Initialization Files -->
    <script src="{{ asset('assets/js/theme.init.js') }}"></script>
    <script src="{{ asset('assets/js/examples/examples.particles.js') }}"></script>
</body>

</html>
