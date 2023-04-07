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
                    <h1 class="text-9 font-weight-bold">CONTACT US</h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a class="text-color-primary" href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div role="main" class="main">

        <div class="container">

            <div class="row py-4">
                <div class="col-lg-6">

                    <h2 class="font-weight-bold text-12 mt-2 mb-0">Contact Us</h2>
                    <hr>

                    <form action="functions.php" method="post">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="mb-1 text-2">Nama Lengkap</label>
                                    <input type="text" value="" data-msg-required="Please enter your name."
                                        maxlength="100" class="form-control text-3 h-auto py-2" name="name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="mb-1 text-2">Nomor Telepon</label>
                                    <input type="number" value="" data-msg-required="Please enter your phone number."
                                        maxlength="15" class="form-control text-3 h-auto py-2" name="phone" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-1 text-2">Alamat Email</label>
                            <input type="email" value="" data-msg-required="Please enter your email address."
                                data-msg-email="Please enter a valid email address." maxlength="100"
                                class="form-control text-3 h-auto py-2" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label class="mb-1 text-2">Layanan Jasa</label>
                            <select data-msg-required="Please enter the subject." class="form-control text-3 h-auto py-2"
                                name="subject" id="subject" required>
                                <option value="">...</option>
                                <option value="Brand">Brand</option>
                                <option value="Flyer">Flyer</option>
                                <option value="Mockup">Mockup</option>
                                <option value="Landing Page">Landing Page</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="mb-1 text-2">Isi Pesan Anda</label>
                            <textarea maxlength="5000" data-msg-required="Please enter your message." rows="8"
                                class="form-control text-3 h-auto py-2" name="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">KIRIM !</button>
                    </form>

                </div>
                <div class="col-lg-6">

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
                        <h4 class="mt-2 mb-1">Kantor <strong>Kami</strong></h4>
                        <ul class="list list-icons list-icons-style-2 mt-2">
                            <li><i class="fas fa-map-marker-alt top-6"></i> <strong class="text-dark">Alamat:</strong> Jl.
                                Pamanukan No.12, Antapani, Kec. Antapani, Kota Bandung, Jawa Barat 40291</li>
                            <li><i class="fas fa-phone top-6"></i> <strong class="text-dark">Phone:</strong> +62 877 3030
                                9409</li>
                            <li><i class="fas fa-envelope top-6"></i> <strong class="text-dark">Email:</strong>
                                Contech.id@gmail.com</li>
                        </ul>
                    </div>

                    <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="950">
                        <h4 class="pt-5">Jam <strong>Operasional</strong></h4>
                        <ul class="list list-icons list-dark mt-2">
                            <li><i class="far fa-clock top-6 text-color-primary"></i> Senin - Jum'at - 9am to 5pm</li>
                            <li><i class="far fa-clock top-6 text-color-primary"></i> Sabtu - 9am to 2pm</li>
                            <li><i class="far fa-clock top-6 text-color-primary"></i> Minggu &amp; Tgl Merah - Closed</li>
                        </ul>
                    </div>

                    <p class="lead alternative-font-4 font-weight-medium text-start text-4 mb-0 mt-4 fst-italic"
                        data-plugin-animated-letters
                        data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationName': 'typeWriter', 'animationSpeed': 30}">
                        "Anda akan rugi jika terus menunda ide konten karena waktu terus berjalan, maka buatlah karya
                        sekarang juga bersama kami, tinggalkan legacy untuk orang sekitar sebagai bukti bahwa anda sangat
                        brilliant!"</p>

                </div>

            </div>

        </div>

        <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
        <div class="google-map mt-0" style="height: 500px;">
            <iframe id="gmap_canvas" style="height: 100%; width: 100%;"
                src="https://maps.google.com/maps?q=Jl.%20Pamanukan%20No.12,%20Antapani,%20Kec.%20Antapani,%20Kota%20Bandung,%20Jawa%20Barat%2040291&t=&z=13&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
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
