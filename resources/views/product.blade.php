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
                    <h1 class="text-9 font-weight-bold">Product</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a class="text-color-primary" href="#">Home</a></li>
                        <li class="active">Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div role="main" class="main shop pt-4">

        <section>
            <div class="container">
                <div class="row align-items-center justify-content-center pt-1 pb-3">
                    <div class="col-lg-6 text-center pt-3 pb-4">
                        <div class="overflow-hidden">
                            <h1 class="font-weight-bold text-color-dark line-height-1 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="300">JASA PEMBUATAN WEBSITE</h1>
                        </div>
                        <div class="divider divider-primary divider-xs taller appear-animation"
                            data-appear-animation="bounceIn" data-appear-animation-delay="300">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <p class="word-rotator letters rotate-2 appear-animation text-justify"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                            <strong class="text-color-primary">CONTECH.ID</strong> memiliki layanan jasa pembuatan website
                            untuk berbagai kebutuhan mulai dari website personal, website produk hingga website korporasi.
                            Desain website yang dibuat dapat berbentuk landing page maupun multi page sesuai dengan
                            keinginan Anda.
                        </p>
                        <p class="appear-animation text-justify" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="800">
                            Adapun teknologi yang kami gunakan dalam pembuatan website dapat menggunakan bahasa pemrograman
                            murni seperti html, css, javascript, php, dll. Namun kami juga dapat membuatkan website
                            menggunakan teknologi CMS (Content Management System) seperti: wordpress, joomla, blogger,
                            drupal, dll.
                        </p>
                    </div>
                    <div class="col-10 col-md-9 col-lg-6 ps-lg-5 pb-4 appear-animation"
                        data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1450"
                        data-plugin-options="{'accY': -200}">
                        <div class="position-relative">
                            <div data-plugin-float-element
                                data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                <img src="{{ asset('assets/image/website/coding-boy.png') }}" class="img-fluid"
                                    alt="CONTECH.ID" />
                            </div>
                            <div class="position-absolute transform3dxy-n50" style="top: 25%; left: 7%;">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 0.5, 'transition': true, 'transitionDuration': 2000, 'isInsideSVG': false}">
                                    <img src="{{ asset('assets/image/website/wordpress-top.png') }}"
                                        class="appear-animation" alt="wordpress" data-appear-animation="fadeInUpShorterPlus"
                                        data-appear-animation-delay="1700" />
                                </div>
                            </div>
                            <div class="position-absolute transform3dxy-n50 ms-5 pb-5 ms-xl-0" style="top: 32%; left: 85%;">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 1, 'transition': true, 'transitionDuration': 1500, 'isInsideSVG': false}">
                                    <img src="{{ asset('assets/image/website/vscode-top.png') }}" class="appear-animation"
                                        alt="vscode" data-appear-animation="fadeInRightShorterPlus"
                                        data-appear-animation-delay="1900" />
                                </div>
                            </div>
                            <div class="position-absolute transform3dxy-n50" style="top: 90%; left: 19%;">
                                <div data-plugin-float-element
                                    data-plugin-options="{'startPos': 'top', 'speed': 2, 'transition': true, 'transitionDuration': 2500, 'isInsideSVG': false}">
                                    <img src="{{ asset('assets/image/website/bootstrap-studio-top.png') }}"
                                        class="appear-animation" alt="bootstrap-studio"
                                        data-appear-animation="fadeInDownShorterPlus" data-appear-animation-delay="2100" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-parallax section-height-3 border-0 pt-0 pb-0 mb-0">
            <div class="container container-lg">
                <h3 class="word-rotator letters type mb-2 text-center">
                    <span class="word-rotator-words">
                        <b class="is-visible font-weight-bold text-color-primary">KEUNGGULAN&nbsp;PEMBUATAN&nbsp;WEBSITE</b>
                        <b class="font-weight-bold text-color-primary">PROSES&nbsp;PEMBUATAN&nbsp;WEBSITE</b>
                    </span>
                </h3><br>
                <p class="text-center">
                    Berikut merupakan keunggulan dan gambaran proses layanan jasa pembuatan website yang Kami kerjakan :
                </p>
            </div>
            <div class="container container-lg">
                <div class="col">
                    <div class="row pt-2 clearfix">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation"
                                data-appear-animation="fadeInRightShorter">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-clock"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">Waktu Pengerjaan</h4>
                                    <p class="mb-4">
                                        Seluruh proses pembuatan website telah diatur berdasarkan timeline sehingga dapat
                                        diselesaikan tepat waktu
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation"
                                data-appear-animation="fadeInLeftShorter">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-comment-dollar"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">Harga Kompetitif</h4>
                                    <p class="mb-4">
                                        Kami menyediakan berbagai macam pilihan paket layanan jasa pembuatan website yang
                                        dapat disesuaikan dengan kebutuhan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-photo-film"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">Kualitas Desain</h4>
                                    <p class="mb-4">
                                        Seluruh desain media pada website yang kami buat memiliki kualitas tinggi sehingga
                                        menghasilkan tampilan yang optimal
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation"
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="200">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-bolt-lightning"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">Kualitas Performa</h4>
                                    <p class="mb-4">
                                        Website yang kami buat memiliki hasil nilai analisa performa kecepatan akses
                                        rata-rata diatas 70%
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 reverse appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-circle-nodes"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">SEO Friendly</h4>
                                    <p class="mb-4">
                                        Setiap halaman website yang Kami buat memiliki berbagai kebutuhan meta data yang
                                        telah disesuaikan dengan isi konten
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="feature-box feature-box-style-2 appear-animation"
                                data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="400">
                                <div class="feature-box-icon">
                                    <i class="fa-solid fa-laptop-code"></i>
                                </div>
                                <div class="feature-box-info">
                                    <h4 class="mb-2">Source Code</h4>
                                    <p class="mb-4">
                                        100% data source code yang telah disusun dengan rapih akan diberikan kepada Anda
                                        setelah website selesai dikerjakan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mb-0">
                <div class="row process process-shapes process-shapes-always-animate my-5">
                    <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content"><i
                                    class="fa-solid fa-magnifying-glass"></i></strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-5 font-weight-bold">RISET</h4>
                            <p class="mb-0">Kami akan melakukan analisa terhadap kebutuhan website Anda seperti penentuan
                                desain, meta data, artikel, halaman yang dibutuhkan, dll.</p>
                        </div>
                    </div>
                    <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                        <div class="process-step-circle process-shapes-always-animate-delay">
                            <strong class="process-step-circle-content"><i
                                    class="fa-solid fa-arrows-spin fa-spin"></i></strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-5 font-weight-bold">PEMBUATAN</h4>
                            <p class="mb-0">Hasil data riset yang telah dianalisa akan di implementasikan pada website
                                Anda sehingga dapat menghasilkan desain dan isi konten yang sesuai dengan kebutuhan Anda.
                            </p>
                        </div>
                    </div>
                    <div class="process-step col-lg-4 mb-5 mb-lg-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content"><i class="fa-solid fa-rocket"></i></strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-5 font-weight-bold">OPTIMASI</h4>
                            <p class="mb-0">
                                Website yang telah selesai di kerjakan akan di analisa kembali oleh team Kami untuk
                                memastikan bahwa website tersebut memiliki performa yang optimal.
                            </p>
                        </div>
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
                            <img src="{{ asset('assets/image/logo/optibis-working.png') }}" class="img-fluid"
                                width="500" alt="BG WEBSITE" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center pt-3">
                    <h2 class="font-weight-bold text-color-dark text-center appear-animation"
                        data-appear-animation="fadeIn" data-appear-animation-delay="500">
                        DAFTAR PAKET WEBSITE
                    </h2>
                    <p class="word-rotator letters rotate-2 appear-animation text-4 text-justify"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700"><span
                            class="word-rotator-words bg-primary rounded-2">
                            <b class="is-visible">CONTECH.ID&nbsp;</b><b>CONTECH.ID&nbsp;</b></span> menyediakan beberapa
                        pilihan paket layanan jasa pembuatan website yang dapat disesuaikan dengan kebutuhan Anda.
                    </p>
                    <p class="word-rotator letters rotate-2 appear-animation text-4 text-justify"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                        Anda dapat memilih paket layanan jasa berdasarkan biaya maupun teknologi yang ingin digunakan untuk
                        pembuatan website Anda sesuai dengan daftar paket yang tertera dibawah ini :<br>
                    <div class="feature-box-icon text-8" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="700">
                        <i class="fas fa-solid fa-angles-down text-color-primary updown"></i>
                    </div>
                    </p>
                </div>
            </div>
        </section>
        <section class="container mt-0">
            <div class="row mb-5 pt-4">
                <div class="col text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="text-3 p-relative top-1">Single Page</div>
                        <div class="px-2">
                            <div class="form-check form-switch form-switch-md mb-0">
                                <input data-content-switcher data-content-switcher-content-id="pricingTable1"
                                    type="checkbox" class="form-check-input" checked>
                            </div>
                        </div>
                        <div class="text-3 p-relative top-1">Multi Page</div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-4 mt-0 mb-2">
                    <div
                        class="card border-radius-0 border-dark bg-color-light box-shadow-0 anim-hover-translate-top-10px transition-3ms">
                        <div class="card-body py-5">

                            <div class="pricing-block">
                                <div class="text-center">
                                    <h4 class="font-weight-bold">EKONOMIS</h4>
                                    <div class="content-switcher-wrapper">
                                        <div class="content-switcher left-50pct transform3dx-n50 active"
                                            data-content-switcher-id="pricingTable1" data-content-switcher-rel="1">
                                            <div class="plan-price bg-transparent mb-4">
                                                <span class="price"><span class="price-unit">IDR</span>1,5jt</span>
                                                <label class="price-label p-2">Maksimal 5 Halaman</label>
                                            </div>
                                        </div>
                                        <div class="content-switcher left-50pct transform3dx-n50"
                                            data-content-switcher-id="pricingTable1" data-content-switcher-rel="2">
                                            <div class="plan-price bg-transparent mb-4">
                                                <span class="price"><span class="price-unit">IDR</span>500rb</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list list-icons list-icons-style-3 list-dark list-icons-sm ms-3 pt-3">
                                    <li><i class="fas fa-check"></i> Menggunakan CMS</li>
                                    <li><i class="fas fa-check"></i> Desain Standard</li>
                                    <li><i class="fas fa-check"></i> 100% Konten dari Klien</li>
                                    <li><i class="fas fa-close"></i> Tanpa SEO Setup</li>
                                    <li><i class="fas fa-close"></i> Tanpa Domain</li>
                                    <li><i class="fas fa-close"></i> Tanpa Hosting</li>
                                    <li><i class="fas fa-close"></i> Tanpa Source Code</li>
                                </ul>
                                <div class="text-center mt-4 pt-2">
                                    <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                                        target="_blank" class="btn btn-dark btn-modern">
                                        DAPATKAN PENAWARAN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div
                        class="card border-radius-0 border-dark bg-color-light box-shadow-0 anim-hover-translate-top-10px transition-3ms">
                        <div class="card-body py-5">
                            <div class="pricing-block">
                                <div class="text-center">
                                    <h4 class="font-weight-bold">STANDARD</h4>

                                    <div class="content-switcher-wrapper">
                                        <div class="content-switcher left-50pct transform3dx-n50 active"
                                            data-content-switcher-id="pricingTable1" data-content-switcher-rel="1">
                                            <div class="plan-price bg-transparent mb-4">
                                                <span class="price"><span class="price-unit">IDR</span>3jt</span>
                                                <label class="price-label p-2">Maksimal 10 Halaman</label>
                                            </div>
                                        </div>
                                        <div class="content-switcher left-50pct transform3dx-n50"
                                            data-content-switcher-id="pricingTable1" data-content-switcher-rel="2">
                                            <div class="plan-price bg-transparent mb-4">
                                                <span class="price"><span class="price-unit">IDR</span>1jt</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list list-icons list-icons-style-3 list-dark list-icons-sm ms-3 pt-3">
                                    <li><i class="fas fa-check"></i> Menggunakan CMS</li>
                                    <li><i class="fas fa-check"></i> Desain Standard</li>
                                    <li><i class="fas fa-check"></i> 75% Konten dari Klien</li>
                                    <li><i class="fas fa-check"></i> Basic SEO Setup</li>
                                    <li><i class="fas fa-close"></i> Tanpa Domain</li>
                                    <li><i class="fas fa-check"></i> Hosting Non Cpanel 1 Tahun</li>
                                    <li><i class="fas fa-close"></i> Tanpa Source Code</li>
                                </ul>
                                <div class="text-center mt-4 pt-2">
                                    <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                                        target="_blank" class="btn btn-dark btn-modern">
                                        DAPATKAN PENAWARAN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-2">
                    <div
                        class="card border-radius-0 border-color-primary bg-color-light box-shadow-0 anim-hover-translate-top-10px transition-3ms">
                        <div class="card-body py-5">

                            <div class="pricing-block">
                                <div class="text-center">
                                    <h4 class="font-weight-bold text-color-primary">PREMIUM</h4>
                                    <div class="content-switcher-wrapper">
                                        <div class="content-switcher left-50pct transform3dx-n50 active"
                                            data-content-switcher-id="pricingTable1" data-content-switcher-rel="1">
                                            <div class="plan-price bg-transparent mb-4">
                                                <span class="price text-color-primary"><span
                                                        class="price-unit">IDR</span>9jt</span>
                                                <label class="price-label p-2">Maksimal 15 Halaman</label>
                                            </div>
                                        </div>
                                        <div class="content-switcher left-50pct transform3dx-n50"
                                            data-content-switcher-id="pricingTable1" data-content-switcher-rel="2">
                                            <div class="plan-price bg-transparent mb-4">
                                                <span class="price text-color-primary"><span
                                                        class="price-unit">IDR</span>3jt</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list list-icons list-icons-style-3 list-primary list-icons-sm ms-3 pt-3">
                                    <li><i class="fas fa-check"></i> Menggunakan Coding + CMS</li>
                                    <li><i class="fas fa-check"></i> Desain Premium (Contech Studio)</li>
                                    <li><i class="fas fa-check"></i> 50% Konten dari Klien</li>
                                    <li><i class="fas fa-check"></i> Advance SEO Setup</li>
                                    <li><i class="fas fa-check"></i> Domain .com atau .id 1 Tahun</li>
                                    <li><i class="fas fa-check"></i> Hosting Cpanel 1 Tahun</li>
                                    <li><i class="fas fa-check"></i> 100% Source Code</li>
                                </ul>
                                <div class="text-center mt-4 pt-2">
                                    <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                                        target="_blank" class="btn btn-dark btn-modern">
                                        DAPATKAN PENAWARAN
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 mb-0 mt-0">
            <div class="shape-divider" style="height: 123px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
                    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
                </svg>
            </div>
            <div class="row container mx-auto">
                <div class="col">
                    <div class="tabs tabs-bottom tabs-center tabs-simple">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tabsNavigationSimpleIcons1" data-bs-toggle="tab">
                                    <p class="mb-0 pb-0">CODE</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tabsNavigationSimpleIcons2" data-bs-toggle="tab">
                                    <p class="mb-0 pb-0">CMS</p>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabsNavigationSimpleIcons1">
                                <div class="text-center mt-0">
                                    <div class="text-center">
                                        <div class="progress-bars mt-1">
                                            <div class="progress-label">
                                                <span class="text-1">HTML</span>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar progress-bar-primary"
                                                    data-appear-progress-animation="100%">
                                                    <span class="progress-bar-tooltip">100%</span>
                                                </div>
                                            </div>
                                            <div class="progress-label">
                                                <span class="text-1">CSS</span>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar progress-bar-primary"
                                                    data-appear-progress-animation="100%"
                                                    data-appear-animation-delay="300">
                                                    <span class="progress-bar-tooltip">100%</span>
                                                </div>
                                            </div>
                                            <div class="progress-label">
                                                <span class="text-1">Javascript</span>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar progress-bar-primary"
                                                    data-appear-progress-animation="85%"
                                                    data-appear-animation-delay="600">
                                                    <span class="progress-bar-tooltip">85%</span>
                                                </div>
                                            </div>
                                            <div class="progress-label">
                                                <span class="text-1">PHP</span>
                                            </div>
                                            <div class="progress mb-2">
                                                <div class="progress-bar progress-bar-primary"
                                                    data-appear-progress-animation="90%"
                                                    data-appear-animation-delay="900">
                                                    <span class="progress-bar-tooltip">90%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabsNavigationSimpleIcons2">
                                <div class="text-center mb-0">
                                    <div class="content-grid content-grid-dashed mt-0 mb-0">
                                        <div class="row content-grid-row mb-0 mt-1">
                                            <div class="content-grid-item col-6 col-lg-3 text-center mb-0">
                                                <div class="p-1">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/image/website/wordpress.png') }}"
                                                        width="100" alt="wordpress">
                                                </div>
                                            </div>
                                            <div class="content-grid-item col-6 col-lg-3 text-center">
                                                <div class="p-1">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/image/website/joomla.png') }}"
                                                        width="100" alt="joomla">
                                                </div>
                                            </div>
                                            <div class="content-grid-item col-6 col-lg-3 text-center">
                                                <div class="p-1">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/image/website/drupal.png') }}"
                                                        width="100" alt="drupal">
                                                </div>
                                            </div>
                                            <div class="content-grid-item col-6 col-lg-3 text-center">
                                                <div class="p-1">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/image/website/blogger.png') }}"
                                                        width="100" alt="blogger">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
