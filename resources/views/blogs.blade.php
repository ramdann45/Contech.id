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
                    <h1 class="text-9 font-weight-bold">BLOG</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a class="text-color-primary" href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div role="main" class="main">
        <div class="container">
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="logo">
                        <a href="#">
                            <i class="fas text-color-tertiary fa-cog fa-spin text-20"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr class="solid mb-1 mt-5">
                </div>
            </div>
            <section class="http-error py-0">
                <div class="row justify-content-center pb-3">
                    <div class="col-12 text-center">
                        <div class="http-error-main">
                            <h2 class="my-0 text-lg-12 text-7">UNDER CONSTRUCTION</h2>
                            <p class="text-lg-4 text-3 my-2 line-height-3">Anda punya pertanyaan atau ingin berkonsultasi ?
                            </p>
                        </div>
                        <a href="contact-us.html"
                            class="btn btn-tertiary btn-rounded btn-xl font-weight-semibold text-2 px-4 py-3 mt-1 mb-4">Hubungi
                            Kami<i class="fas fa-angle-right ps-2"></i></a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <section class="section section-height-5 section-with-shape-divider border-0 lazyload mt-5 mb-0 p-relative"
        data-bg-src="img/parallax/parallax-2.jpg">
        <div class="particles-wrapper z-index-1">
            <div id="particles-partic" class="text-color-light"
                style="background-image: linear-gradient(to bottom, #ff0068, #d90071, #b00075, #840073, #570a6a, #3c1764, #211a5b, #001a4f, #001f47, #08223e, #162434, #212529);">
            </div>
        </div>
        <div class="shape-divider shape-divider-reverse-x" style="height: 136px;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                y="0px" viewBox="0 0 1920 136" preserveAspectRatio="xMinYMin">
                <path
                    d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z"
                    fill="#ffffff" />
            </svg>
        </div>
        <div class="container text-center z-index-1">
            <div class="row">
                <div class="col">
                    <h4 class="mb-3 text-lg-12 text-10 text-color-light">Let’s Get Started</h4>
                    <p class="mb-0 text-4">Dengan menggunakan promo konten, produk anda akan laris manis dipasaran.</p>
                    <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                        class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3 mt-4">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection
