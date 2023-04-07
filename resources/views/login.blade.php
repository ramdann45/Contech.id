<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/image/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('assets/image/favicon.ico') }}">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

    <style>
        html,
        * {
            margin: 0;
            padding: 0;
        }

        .main {
            height: 100vh;
            width: 100%;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: linear-gradient(to right bottom, #051937, #171228, #190a1a, #12040d, #000000);
            color: #fff;
        }
    </style>

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

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="main">
        @if (session('loginError'))
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong><i class="fas fa-exclamation-triangle"></i>{{ session('loginError') }}</strong>
            </div>
        @endif

        <h2 class="font-weight-bold text-8 mb-2 text-light">Login</h2>
        <form action="{{ route('login') }}" method="post" class="needs-validation rounded-3 p-5 bg-primary">
            @csrf
            <div class="row">
                <div class="form-group col">
                    <label class="form-label text-color-dark text-3" for="email">Alamat Email <span
                            class="text-color-danger">*</span></label>
                    <input id="email" name="email" type="email" value=""
                        class="form-control form-control-lg text-4" autofocus required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <label class="form-label text-color-dark text-3" for="password">Password <span
                            class="text-color-danger">*</span></label>
                    <input id="password" name="password" type="password" value=""
                        class="form-control form-control-lg text-4" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <button type="submit"
                        class="btn btn-dark btn-modern w-100 text-uppercase rounded-0 font-weight-bold text-3 py-3"
                        data-loading-text="Loading...">Login</button>
                </div>
            </div>
            <div class="row justify-content-between">
                {{-- <div class="form-group col-md-auto">
                    <div class="custom-control custom-checkbox">
                        <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2"
                            href="#">Register</a>
                    </div>
                </div> --}}
                <div class="form-group col-12 text-center">
                    <a class="text-decoration-none text-color-dark text-color-hover-primary font-weight-semibold text-2"
                        href="#">Register</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
