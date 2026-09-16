    <!-- Start Header Section -->
    <header class="ak-site_header ak-style1 ak-sticky_header ak-site_header_full_width">
        <div class="header-top">
            <div class="wrapper">
                <div class="header-logo">
                    <a href="{{ route('voucher.form') }}" class="logo">Gutschein</a>
                </div>
                                <!-- Google Fonts: Parisienne -->
                                <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
                                <div class="center-log">
                                    <a href="{{ route('index') }}" class="felicita-logo-link">
                                        <span id="felicita-logo-animated">Felicità</span>
                                    </a>
                                </div>
                                <script>
                                window.addEventListener('DOMContentLoaded', function() {
                                    setTimeout(function() {
                                        var logo = document.getElementById('felicita-logo-animated');
                                        if (logo) {
                                            logo.style.opacity = '1';
                                            logo.style.transform = 'translateY(0)';
                                        }
                                    }, 400);
                                });
                                </script>
                <div class="header-right-actions">
                    <a href="{{ route('reservations') }}" class="header-reserve-link">Reservierung</a>
                    <button class="ak-menu-toggle" id="akMenuToggle" type="button">
                        <svg viewBox="0 0 20 15" width="40px" height="30px" class="ak-menu-icon">
                            <path d="M20,2 L2,2" class="bar-1"></path>
                            <path d="M2,7 L20,7" class="bar-2"></path>
                            <path d="M30,12 L2,12" class="bar-3"></path>
                        </svg>
                        
                    </button>
                </div>

                <ul class="top-main-menu">
                    <li class="top-main-menu-li">
                        <a href="{{ route('index') }}">Startseite</a>
                        <img class="top-main-menu-img" src="{{ asset('assets/img/herofelicita.webp') }}" alt="...">
                    </li>
                    <li class="top-main-menu-li">
                        <a href="{{ route('about') }}">Über uns</a>
                        <img class="top-main-menu-img" src="{{ asset('assets/img/about2.jpg') }}" alt="...">
                    </li>
                    <li class="top-main-menu-li">
                        <a href="{{ route('menu') }}">Speisekarte</a>
                        <img class="top-main-menu-img menu-img" src="{{ asset('assets/img/food_item_1.jpg') }}" alt="...">
                    </li>
                    <li class="top-main-menu-li">
                        <a href="{{ route('chef') }}">Küchenchef</a>
                        <img class="top-main-menu-img" src="{{ asset('assets/img/chef_1.jpg') }}" alt="...">
                    </li>
                    <li class="top-main-menu-li">
                        <a href="{{ route('contact') }}">Kontakt</a>
                        <img class="top-main-menu-img" src="{{ asset('assets/img/barfelicita.webp') }}" alt="...">
                    </li>
                </ul>

            </div>
        </div>
        <div class="ak-main_header">
            <div class="container">
                <div class="ak-main_header_in">
                    <div class="ak-main_header_left">
                        <a class="ak-site_branding" href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/Felicità logo .png') }}" alt="Felicita Logo" style="height:180px;width:auto;max-width:480px;">
                        </a>
                    </div>
                    <div class="ak-main_header_mobile_center_logo">
                        <a href="{{ route('index') }}" class="felicita-logo-link mobile">
                            <span class="felicita-logo-mobile-text">Felicità</span>
                        </a>
                    </div>
                    <div class="ak-main_header_right">
                        <div class="ak-nav ak-medium">
                            <ul class="ak-nav_list" style="margin-top:0px;">
                                <li>
                                    <a href="{{ route('index') }}">Startseite</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">Über uns</a>
                                </li>
                                <li>
                                    <a href="{{ route('menu') }}">Speisekarte</a>
                                </li>
                                <li>
                                    <a href="{{ route('reservations') }}">Reservierung</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">Kontakt</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
                <!-- Removed nav-bar-border for Felicità logo animation effect -->