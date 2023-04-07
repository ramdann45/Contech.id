@extends('layouts.main')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-1 mb-0">
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
                    <h1 class="text-9 font-weight-bold">PORTOFOLIO</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a class="text-color-primary" href="#">Home</a></li>
                        <li class="active">Portofolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div role="main" class="main my-0">
        <section class="section section-height-2 section-with-shape-divider bg-transparent border-0 my-0">
            <div class="container text-center pt-3">
                <div class="row row-gutter-sm align-items-center">
                    <div class="col-lg-3 center">
                        <div class="row flex-xl-nowrap align-items-center">
                            <div class="col-sm-auto text-center">
                                <div class="d-flex justify-content-center appear-animation" data-appear-animation="fadeIn"
                                    data-appear-animation-delay="400">
                                    <img width="63" height="63" src="{{ asset('assets/image/logo/recomended.png') }}"
                                        alt="" />
                                    <span class="text-3 font-weight-bold text-color-dark pt-2 ms-3">
                                        <strong class="d-block font-weight-bold text-10 mb-0">100 +</strong>
                                        Satisfied Clients
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 pt-3">
                        <div class="owl-carousel owl-theme"
                            data-plugin-options="{'responsive': {'0': {'items': 3}, '476': {'items': 3}, '768': {'items': 3}, '992': {'items': 5}, '1200': {'items': 5}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
                            <div>
                                <a href="https://amaninatour.com" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/amanina-tour.png') }}" alt="Amanina Tour"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/avion.png') }}" alt="Avion">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/avistro.png') }}" alt="Avistro">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/bplus.png') }}" alt="BPlus">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/bangkit.png') }}" alt="Bangkit">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/bbs.png') }}" alt="BBS">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/beblex.png') }}" alt="Beblex">
                            </div>
                            <div>
                                <a href="https://bmmttravel.com" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/bmmt.png') }}" alt="BMMT"></a>
                            </div>
                            <div>
                                <a href="https://bonekaku.co.id" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/bonekaku.png') }}" alt="Bonekaku"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/bri.png') }}" alt="BRI">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/bubu-dolphin.png') }}"
                                    alt="Bubu Dolphin">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/caffein-coffee.png') }}"
                                    alt="Caffein Coffee">
                            </div>
                            <div>
                                <a href="https://contech.id" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/contech.png') }}" alt="Contech"></a>
                            </div>
                            <div>
                                <a href="https://dbeyond.co.id" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/dbeyond.png') }}" alt="DBeyond"></a>
                            </div>
                            <div>
                                <a href="https://www.partaigelora.id" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/gelora.png') }}" alt="Partai Gelora"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/gng.png') }}" alt="Go n GO">
                            </div>
                            <div>
                                <a href="https://gudangpesta.com" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/gudang-pesta.png') }}" alt="Gudang Pesta"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/heyday.png') }}"
                                    alt="Heyday">
                            </div>
                            <div>
                                <a href="https://hidayatur.id" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/hidayatur.png') }}" alt="Hidayatur"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/indo-mulia.png') }}"
                                    alt="Indo Mulia">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/inuum.png') }}"
                                    alt="Inuum">
                            </div>
                            <div>
                                <a href="https://istanayatim.org" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/istana-yatim.png') }}" alt="Istana Yatim"></a>
                            </div>
                            <div>
                                <a href="https://kampoengkoneng.com" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/kampoeng-koneng.png') }}"
                                        alt="Kampoeng Koneng"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/kubukami.png') }}"
                                    alt="Kubukami">
                            </div>
                            <div>
                                <a href="https://leica-geosystems.com" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/leica.png') }}" alt="Leica Geosystems"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/madiana.png') }}"
                                    alt="Madiana">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/medglow.png') }}"
                                    alt="Medglow">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/shafone.png') }}"
                                    alt="Shafone">
                            </div>
                            <div>
                                <a href="https://www.mitrayatim.org" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/mitra-yatim.png') }}" alt="Mitra Yatim"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/roro-mendut.png') }}"
                                    alt="Roro Mendut">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/sahrin-hamid.png') }}"
                                    alt="Sahrin Hamid">
                            </div>
                            <div>
                                <a href="https://tenang.co.id/" target="_blank"><img class="img-fluid"
                                        src="{{ asset('assets/image/client/tenang-food.png') }}" alt="Tenang Food"></a>
                            </div>
                            <div>
                                <img class="img-fluid" src="{{ asset('assets/image/client/triptees.png') }}"
                                    alt="Triptees">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-2">
                <div class="row mt-3 pt-2">
                    <div class="col-lg-3 position-relative">
                        <aside class="sidebar" id="sidebar" data-plugin-sticky
                            data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 110}}">
                            <h2 class="font-weight-semi-bold text-color-primary">Portofolio Kami :</h2>
                            <ul class="nav nav-list flex-column sort-source mb-5" data-sort-id="portfolio"
                                data-option-key="filter"
                                data-plugin-options="{'layoutMode': 'fitRows', 'filter': '.sosial-media'}">
                                <li class="nav-item" data-option-value=".multi-page"><a class="nav-link active"
                                        href="#">Multi Page Website</a></li>
                                <li class="nav-item" data-option-value=".landing-page"><a class="nav-link"
                                        href="#">Landing Page Website</a></li>
                                <li class="nav-item" data-option-value="*"><a class="nav-link"
                                        href="#">Seluruhnya</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-9">
                        <div class="sort-destination-loader sort-destination-loader-showing">
                            <div class="row portfolio-list lightbox sort-destination" data-sort-id="portfolio"
                                data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">

                                <!-- WEBSITE Multi page -->
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://www.smartgps.co.id" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/smartgps.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">smartgps.co.id</span>
                                                        <span class="thumb-info-type">Website Premium</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://www.technolife.co.id/" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/technolife.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">technolife.co.id</span>
                                                        <span class="thumb-info-type">Website Premium</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://depothub.id/" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/depothub.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner text-color-light">depothub.id</span>
                                                        <span class="thumb-info-type">Website Premium</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://dbeyond.optibis.id/" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/dbeyond.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner text-color-light">dbeyond.id</span>
                                                        <span class="thumb-info-type">Website Premium</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://dks.optibis.id/" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/dks.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner text-color-light">dks.id</span>
                                                        <span class="thumb-info-type">Website Premium</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://optibis.id/" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/optibis.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner text-color-light">optibis.id</span>
                                                        <span class="thumb-info-type">Website Premium</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://hidayatur.id" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/hidayatur.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner text-color-light">hidayatur.id</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://bmmttravel.com" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/bmmt.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">bmmttravel.com</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://bonekaku.co.id" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/bonekaku.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">bonekaku.co.id</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://amaninatour.com" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/amaninatour.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">amaninatour.com</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://armindotravel.co.id" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/armindojayatur.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">armindotravel.co.id</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://mytravelink.com" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/mytravelink.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">mytravelink.com</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://kagumimalaysia.com" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/kagumimalaysia.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">kagumimalaysia.com</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://warungkejujuran.com" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/warungkejujuran.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">warungkejujuran.com</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item multi-page">
                                    <div class="portfolio-item">
                                        <a href="https://crboxindonesia.com" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/crboxindonesia.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">crboxindonesia.com</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <!-- Website Landing Page -->
                                <div class="col-md-6 col-lg-4 isotope-item landing-page	">
                                    <div class="portfolio-item">
                                        <a href="https://invilink.id/" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/invilink.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner text-color-light">invilink.id</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item landing-page	">
                                    <div class="portfolio-item">
                                        <a href="https://sollasido.id/" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/sollasido.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span class="thumb-info-inner text-color-light">sollasido.id</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 isotope-item landing-page	">
                                    <div class="portfolio-item">
                                        <a href="https://indonesiarespon.org" target="_blank">
                                            <span class="thumb-info thumb-info-lighten border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ asset('assets/image/portofolio/website/indonesiarespon.jpg') }}"
                                                        class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-title">
                                                        <span
                                                            class="thumb-info-inner text-color-light">indonesiarespon.org</span>
                                                        <span class="thumb-info-type">Website</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
                    <h4 class="mb-3 text-lg-12 text-10 text-color-light">Let’s Get Started</h4>
                    <p class="mb-0 text-4">Dengan menggunakan promo konten, produk anda akan laris manis dipasaran.</p>
                    <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                        class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3 mt-4">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection
