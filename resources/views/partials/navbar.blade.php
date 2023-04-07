<header id="header" class="header-transparent header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="index.html">
                                <img alt="CONTECH LOGO" width="140"
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
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('home.index') ? 'active' : '' }}"
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
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('services.index') ? 'active' : '' }}"
                                                class="dropdown-toggle" href="{{ route('services.index') }}">
                                                Services
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('product.index') ? 'active' : '' }}"
                                                href="{{ route('product.index') }}">
                                                Product
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('blog.index') ? 'active' : '' }}"
                                                href="{{ route('blog.index') }}">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('portofolio.index') ? 'active' : '' }}"
                                                href="{{ route('portofolio.index') }}">
                                                Portofolio
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('contact.index') ? 'active' : '' }}"
                                                href="{{ route('contact.index') }}">
                                                Contact Us
                                            </a>
                                        </li>
                                        <li class="d-flex align-items-center justify-content-center mt-2 mt-lg-0">
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('contact.index') ? 'active' : '' }}"
                                                href="{{ route('login.index') }}">
                                                <button class="btn btn-primary w-100">Masuk</button>
                                            </a>
                                            <a class="nav-link text-capitalize font-weight-semibold custom-text-3 {{ Route::is('contact.index') ? 'active' : '' }}"
                                                href="{{ route('contact.index') }}">
                                                <button class="btn btn-outline-success">Daftar</button>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
