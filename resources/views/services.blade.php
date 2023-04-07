@extends('layouts.main')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-1">
        <div class="particles-wrapper z-index-1">
            <div id="particles-1" class="d-none"></div>
            <div id="particles-2" class="d-none"></div>
            <div id="particles-3" class="d-none"></div>
            <div id="particles-4" class="text-color-light"
                style="background-image: linear-gradient(to right bottom, #ff0068, #d90071, #b00075, #840073, #570a6a, #450d67, #310f64, #191060, #1b1168, #1d1370, #1f1479, #211581);">
            </div>
        </div>
        <div class="container">
            <div class="row mt-1">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold">Services</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a class="text-color-primary" href="#">Home</a></li>
                        <li class="active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div role="main" class="main">
        <section class="container">
            <div class="row pt-4">
                <div class="col">
                    <div class="overflow-hidden mb-3">
                        <h2 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation"
                            data-appear-animation="maskUp">
                            <span>Mengapa anda harus Memesan di <span class="text-color-primary">Contech.Id</span> ? </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-lg-12   ">
                    <div class="overflow-hidden">
                        <p class="lead mb-0 appear-animation" data-appear-animation="maskUp"
                            data-appear-animation-delay="250">
                            <span class="text-color-primary text-weight-bold">CONTECH.ID</span> adalah digital optimator
                            yang paling cepat dan terjangkau. Kami memiliki banyak pilihan jasa konten seperti video
                            editing, social media manager, pembuatan logo, animasi, graphic motion, product packaging, mock
                            up, company profile, landing page, website, dll. Kami memahami kebutuhan anda di era yang serba
                            cepat ini.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section custom-section-full-width bg-color-transparent border-0 my-0">
            <div class="container container-xl-custom pb-0 mb-0">
                <div class="row pt-4 justify-content-center">
                    <div class="col-md-6 col-lg-3 text-center mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="650">
                        <img src="{{ asset('assets/image/logo/idea.png') }}" class="img-fluid" width="100"
                            alt="" />
                        <h4 class="text-color-dark font-weight-bold text-6 mb-3">Creative Idea</h4>
                        <p class="custom-text-size-1 px-lg-4">Design yang baik dapat mempermudah penjualan produk anda.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center mt-lg-5 mb-0 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
                        <img src="{{ asset('assets/image/logo/high.png') }}" class="img-fluid" width="100"
                            alt="" />
                        <h4 class="text-color-dark font-weight-bold text-6 mb-3">High Creative Minds</h4>
                        <p class="custom-text-size-1 px-lg-4">Produk anda menjadi lebih berkualitas di mata costumer.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1050">
                        <img src="{{ asset('assets/image/logo/reward.png') }}" class="img-fluid" width="100"
                            alt="" />
                        <h4 class="text-color-dark font-weight-bold text-6 mb-3">Multiple Rewards</h4>
                        <p class="custom-text-size-1 px-lg-4">Meningkatkan kredibilitas dimata klien & costumer.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-0 mb-0">
            <div class="row align-items-center justify-content-center pt-0 pb-0">
                <div class="col-10 col-md-9 col-lg-6 ps-lg-5 appear-animation"
                    data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1450"
                    data-plugin-options="{'accY': -200}">
                    <div class="position-relative d-flex justify-content-center align-items-center">
                        <div data-plugin-float-element
                            data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{ asset('assets/image/logo/optibis-working.png') }}" class="img-fluid" width="500"
                                alt="BG WEBSITE" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center pt-3">
                    <h2 class="font-weight-bold text-color-dark text-center appear-animation" data-appear-animation="fadeIn"
                        data-appear-animation-delay="500">
                        Lets Go!
                    </h2>
                    <p class="word-rotator letters rotate-2 appear-animation text-4" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="700">Perkenalkan produk anda sekarang juga. Dengan menggunakan promo
                        konten, produk anda akan laris manis dipasaran.
                    </p>
                    <p class="word-rotator letters rotate-2 appear-animation text-4" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="700">
                    <div class="feature-box-icon text-8" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="700">
                        <i class="fas fa-solid fa-angles-down text-color-primary updown"></i>
                    </div>
                    </p>
                </div>
            </div>
        </section>
    </div>

    <section class="section section-height-5 section-with-shape-divider border-0 lazyload mt-5 mb-0 p-relative"
        data-bg-src="img/parallax/parallax-2.jpg">
        <div class="particles-wrapper z-index-1">
            <div id="particles-partic" class="text-color-light"
                style="background-image: linear-gradient(to bottom, #ff0068, #d90071, #b00075, #840073, #570a6a, #3c1764, #211a5b, #001a4f, #001f47, #08223e, #162434, #212529);">
            </div>
        </div>
        <div class="shape-divider shape-divider-reverse-x" style="height: 136px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 1920 136" preserveAspectRatio="xMinYMin">
                <path
                    d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z"
                    fill="#ffffff" />
            </svg>
        </div>
        <div class="container text-center z-index-1">
            <div class="row">
                <div class="col">
                    <h4 class="mb-3 text-lg-8 text-6 text-color-light">Apa kerugian nya jika tidak pesan sekarang juga ?
                    </h4>
                    <p class="mb-0 text-4">Anda akan rugi jika terus menunda ide konten karena waktu terus berjalan, maka
                        buatlah karya sekarang juga bersama kami, tinggalkan legacy untuk orang sekitar sebagai bukti bahwa
                        anda sangat brilliant!</p>
                    <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                        class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3 mt-4">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection
