@extends('layouts.main')

@section('content')
    <div role="main" class="main">

        <!-- Section 1 -->
        <section
            class="section section-with-shape-divider border-0 p-relative mt-0 mb-0 d-flex justify-content-center align-items-center"
            style="height: 100vh;">
            <div class="shape-divider shape-divider-bottom z-index-3" style="height: 136px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 1920 136" preserveAspectRatio="xMinYMin">
                    <path
                        d="M 0 0.11 L 0 136 L 1920 136 L 1920 1.9 C 1650.0482 79.0955 1327.0648 134 980 134 C 615.6218 134 277.7878 84.5059 0 0.11 Z"
                        fill="#ffffff" />
                </svg>
            </div>
            <div class="particles-wrapper z-index-1">
                <div id="particles-1" class="d-none"></div>
                <div id="particles-2" class="d-none"></div>
                <div id="particles-3" class="d-none"></div>
                <div id="particles-4" class="text-color-light"
                    style="background-image: linear-gradient(to right bottom, #ff0068, #d90071, #b00075, #840073, #570a6a, #450d67, #310f64, #191060, #1b1168, #1d1370, #1f1479, #211581);">
                </div>
            </div>
            <div class="z-index-10 d-flex justify-content-center align-items-center">
                <div class="row p-0 mt-0">
                    <div class="transition-magnetic" data-plugin-hover-effect data-plugin-options="{'effect': 'magnetic'}">
                        <div class="container pb-xl-5">
                            <div id="aboutus" class="row align-items-center pt-4 pb-lg-5 my-5" data-spy-offset="15">
                                <div class="col-lg-6 pb-sm-5 pb-lg-0 mb-5 mb-lg-0">
                                    <div class="custom-svg-wrapper-1 px-5">
                                        <div class="text-center" data-plugin-float-element
                                            data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'isInsideSVG': true, 'transition': true, 'transitionDuration': 2000}">
                                            <img src="{{ asset('assets/image/logo/logo icon putih contech.png') }}"
                                                class="img-fluid contech position-relative z-index-1 appear-animation"
                                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1100"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <h2 class="font-weight-bold text-10 appear-animation text-color-light"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                                        Boost and scale up your business to the next level with <span
                                            class="highlighted-word text-color-primary online">updated
                                            technology</span></h2>
                                    <span
                                        class="text-color-light positive-ls-2 font-weight-medium custom-font-size-2 appear-animation"
                                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">Buat Situs
                                        Web Sempurna Anda bersama
                                        Kami!. Kami adalah ahli dalam pembuatan situs web, memberikan solusi yang
                                        terjangkau dan dapat disesuaikan untuk bisnis dan individu.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 2 -->
        <section id="features" class="section section-with-shape-divider border-0 my-0 bg-transparent">
            <div class="container pt-0 mb-0">
                <div class="row align-items-center justify-content-center py-2 mt-lg-4 mb-0">
                    <div class="col-md-9 col-lg-5 col-xl-6 order-2 order-lg-1">
                        <div data-plugin-float-element
                            data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{ asset('assets/image/logo/optibis-working.png') }}"
                                class="img-fluid appear-animation" alt="" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="200" style="margin-top: -65px;" />
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-6 order-1 order-lg-2 mb-5 mb-xl-0 pb-5 pb-xl-0">
                        <div class="overflow-hidden mb-4">
                            <h2 class="font-weight-bold text-9 negative-ls-05 line-height-2 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="600">Boost and scale
                                up your business to the next level with <span
                                    class="text-color-primary font-weight-bold">updated technology</span></h2>
                        </div>
                        <p class="word-rotator letters rotate-2 mb-2 pb-2 text-justify"><span
                                class="word-rotator-words bg-tertiary"><b
                                    class="is-visible">Contech.Id&nbsp;</b><b>Contech.Id&nbsp;</b></span> adalah
                            perusahaan penyedia jasa pembuatan website yang didedikasikan untuk membantu membangun
                            bisnis di era modern seperti sekarang. Tim pengembang dan perancang berpengalaman kami
                            bekerja sama untuk membuat situs web khusus yang memenuhi kebutuhan dan tujuan unik
                            klien kami. Dengan fokus pada pengalaman pengguna, aksesibilitas, dan pengoptimalan
                            mesin telusur, kami memastikan bahwa setiap situs web yang Kami buat memberikan hasil
                            baik.</p>
                        <a href="portofolio.html" data-hash data-hash-offset="0" data-hash-offset-lg="70"
                            class="btn btn-tertiary btn-rounded font-weight-bold text-3-5 px-5 py-3 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1200">Reviews</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3 -->
        <section id="services" class="section custom-section-full-width bg-color-transparent border-0 my-0">
            <div class="container container-xl-custom pb-0 mb-0">
                <div class="row pt-4 justify-content-center">
                    <div class="col-md-6 col-lg-3 text-center mb-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="650">
                        <img src="{{ asset('assets/image/logo/recomended.png') }}" class="img-fluid" width="100"
                            alt="" />
                        <h4 class="text-color-dark font-weight-bold text-6 mb-3">Professional Quality</h4>
                        <p class="custom-text-size-1 px-lg-4">Kami membangun konten inti yang paling penting dan
                            berharga untuk anda yang ingin dikenal dengan jangkauan citra yang baik dan tepat
                            sasaran.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center mt-lg-5 mb-0 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
                        <img src="{{ asset('assets/image/logo/time.png') }}" class="img-fluid" width="100"
                            alt="" />
                        <h4 class="text-color-dark font-weight-bold text-6 mb-3">Give on Time</h4>
                        <p class="custom-text-size-1 px-lg-4">Semua hal kecil akan menjadi sesuatu yang besar dan
                            terus bertumbuh dengan kunci optimasi yang tepat, adaptasi yang benar, serta disiplin
                            pada goals dan target.</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center mb-0 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1050">
                        <img src="{{ asset('assets/image/logo/reserch.png') }}" class="img-fluid" width="100"
                            alt="" />
                        <h4 class="text-color-dark font-weight-bold text-6 mb-3">Whatsapp Support</h4>
                        <p class="custom-text-size-1 px-lg-4">Relevan dan konsisten adalah perjuangan tanpa henti,
                            karena perubahan akan mempertahankan eksistensi anda di segala zaman.</p>
                    </div>
                </div>
            </div>
        </section>

        <section
            class="section section-with-shape-divider border-0 overflow-hidden z-index-1 m-0 p-lg-5 d-flex justify-content-center align-items-center"
            style="background-image: linear-gradient(to left top, #ff0068, #d90071, #b00075, #840073, #570a6a, #450d67, #310f64, #191060, #1b1168, #1d1370, #1f1479, #211581); min-height: 70vh;">
            <div class="shape-divider shape-divider-reverse-x" style="height: 102px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                    <path fill="#FFF"
                        d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                        c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                        c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                        c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                        c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z" />
                </svg>
            </div>
            <div id="particles-partic" class="p-absolute w-100 h-100"></div>
            <div class="row mt-5 mx-lg-2 mb-5 container">
                <div class="col-lg-10 col-12 text-center offset-lg-1 mb-4">
                    <p class="sub-title text-light text-8 text-lg-12 font-weight-semibold positive-ls-2 mt-2 mb-4">
                        MENGAPA HARUS MEMILIH
                        <span
                            class="highlighted-word highlighted-word-animation-1 highlighted-word-animation-1-2 highlighted-word-animation-1 highlighted-word-animation-1-no-rotate alternative-font-12 font-weight-semibold line-height-2 pb-2 text-primary">KAMI?</span>
                    </p>
                </div>

                <div class="col-md-6">
                    <p class="pb-2 mb-4 appear-animation text-light text-4 text-justify"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        data-appear-animation-duration="750">CONTECH.ID siap memenuhi kebutuhan Anda untuk
                        membangun bisnis menjadi bisa bersaing di era sekarang yang serba digital. Disini Kami hadir
                        untuk membangun interface perusahaan dengan website berkualitas dan pastinya menarik agar
                        client bisa tertarik kepada bisnis Anda.</p>
                    <a href="portofolio.html"
                        class="btn btn-modern btn-gradient btn-rounded btn-px-5 py-3 text-3 mb-4 appear-animation"
                        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000"
                        data-appear-animation-duration="750" target="_blank">VIEW PORTOFOLIO</a>
                </div>

                <div class="col-md-6">
                    <img data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800"
                        data-appear-animation-duration="750" class="img-fluid" width="1000"
                        src="{{ asset('assets/image/bg/people.png') }}" alt="">
                </div>

            </div>
            <div class="spacer py-5 my-5"></div>
            <div class="shape-divider shape-divider-bottom" style="height: 102px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
                    <path fill="#FFF"
                        d="M1895,78c-56.71-6.03-113.75-12.1-167-17c-75.42-6.94-133.81-10.66-171-13c-62.1-3.91-108.85-5.97-155-8
                        c-35.96-1.58-78.06-3.42-133-5c-59.81-1.72-103.18-2.23-172-3c-92.17-1.03-154.41-1.01-169-1c-69.05,0.05-115.16,0.67-137,1
                        c-43.08,0.65-76.21,1.48-97,2c-28.02,0.7-71.13,1.8-128,4c-16.64,0.64-57.72,2.28-111,5c-26.12,1.33-67.11,3.45-121,7
                        c-21.14,1.39-54.21,3.59-96,7c-19.93,1.63-39.22,3.32-47,4c-16.12,1.41-33.55,2.94-55,5c-26.48,2.54-19.07,2.04-77,8
                        c-19.39,1.99-36.94,3.77-60.59,7.46V103H1923V81C1916.55,80.3,1906.82,79.26,1895,78z" />
                </svg>
            </div>
        </section>
    </div>

    <section class="parallax mt-0 mb-0" data-plugin-parallax data-plugin-options="{'speed': 1.5}"
        data-image-src="{{ asset('assets/image/bg/optibis-bottom.jpg') }}">
        <div class="container pt-5 pb-3">
            <h2 class="font-weight-extra-bold mb-1 text-center">
                <b class="text-5 text-primary d-block line-height-1 font-weight-extra-bold appear-animation"
                    data-appear-animation="blurIn" data-appear-animation-delay="250"
                    data-appear-animation-duration="750">KLIEN KAMI</b>
                <span class="font-weight-bold text-3 appear-animation" data-appear-animation="fadeInUpShorter"
                    data-appear-animation-delay="600" data-appear-animation-duration="750">100+ Bisnis Telah
                    Menggunakan Layanan Kami.</span>
            </h2>
            <p class="font-weight-bold text-4 text-center appear-animation pb-5" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="750">" Your Growth Is Our
                Pride "</p>
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
                    <img class="img-fluid" src="{{ asset('assets/image/client/bubu-dolphin.png') }}" alt="Bubu Dolphin">
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
                    <img class="img-fluid" src="{{ asset('assets/image/client/heyday.png') }}" alt="Heyday">
                </div>
                <div>
                    <a href="https://hidayatur.id" target="_blank"><img class="img-fluid"
                            src="{{ asset('assets/image/client/hidayatur.png') }}" alt="Hidayatur"></a>
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/indo-mulia.png') }}" alt="Indo Mulia">
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/inuum.png') }}" alt="Inuum">
                </div>
                <div>
                    <a href="https://istanayatim.org" target="_blank"><img class="img-fluid"
                            src="{{ asset('assets/image/client/istana-yatim.png') }}" alt="Istana Yatim"></a>
                </div>
                <div>
                    <a href="https://kampoengkoneng.com" target="_blank"><img class="img-fluid"
                            src="{{ asset('assets/image/client/kampoeng-koneng.png') }}" alt="Kampoeng Koneng"></a>
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/kubukami.png') }}" alt="Kubukami">
                </div>
                <div>
                    <a href="https://leica-geosystems.com" target="_blank"><img class="img-fluid"
                            src="{{ asset('assets/image/client/leica.png') }}" alt="Leica Geosystems"></a>
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/madiana.png') }}" alt="Madiana">
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/medglow.png') }}" alt="Medglow">
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/shafone.png') }}" alt="Shafone">
                </div>
                <div>
                    <a href="https://www.mitrayatim.org" target="_blank"><img class="img-fluid"
                            src="{{ asset('assets/image/client/mitra-yatim.png') }}" alt="Mitra Yatim"></a>
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/roro-mendut.png') }}" alt="Roro Mendut">
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/sahrin-hamid.png') }}" alt="Sahrin Hamid">
                </div>
                <div>
                    <a href="https://tenang.co.id/" target="_blank"><img class="img-fluid"
                            src="{{ asset('assets/image/client/tenang-food.png') }}" alt="Tenang Food"></a>
                </div>
                <div>
                    <img class="img-fluid" src="{{ asset('assets/image/client/triptees.png') }}" alt="Triptees">
                </div>
            </div>
        </div>
    </section>

    <section class="section section-height-5 section-with-shape-divider border-0 lazyload mt-5 mb-0 p-relative"
        data-bg-src="img/parallax/parallax-2.jpg">
        <div class="particles-wrapper z-index-1">
            <div id="particles-footer" class="text-color-light"
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
                    <p class="mb-0 text-4">Dengan menggunakan promo konten, produk anda akan laris manis dipasaran.
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=6287730309409&text=Hallo%20admin%20Contech%20id"
                        class="btn btn-primary btn-lg text-3 font-weight-semibold px-4 py-3 mt-4">Hubungi Kami</a>
                </div>
            </div>
        </div>
    </section>
@endsection
