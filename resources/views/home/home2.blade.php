<!DOCTYPE html>
<html class="no-js" lang="de">

    <!-- Start head Section -->
    <x-head/>
    <!-- End head Section -->

<body>
    <div id="minicircle"></div>

    <!-- Start preloader  -->
    <x-preloader/>
    <!-- End preloader  -->


    <!-- Start Header Section -->
    <x-header/>
    <!-- End Header Section -->

    <!-- Coupon Modal Popup Removed -->

    <div id="scrollsmoother-container">
        <main>
            <!-- Start Hero -->
            <section>
                <div class="ak-hero ak-style1">
                    <div class="ak-hero-bg ak-bg" data-src="{{ asset('assets/img/herofelicita.webp') }}"></div>
                    <div class="hero-text-section container-fluid">
                        <div class="slider-info">
                            <div class="hero-title">
                                <h1 class="hero-main-title">Elegante Auszeit</h1>
                                <h1 class="hero-main-title-1">Restaurant</h1>
                            </div>

                            <div class="ak-height-30 ak-height-lg-30"></div>
                            <div>
                                <p class="hero-sub-text">Mediterrane Lebensfreude, italienische Handwerkskunst –
                                    Felicità ist Ihre kulinarische Oase mitten in Leipzig.
                                </p>
                            </div>
                            <div class="ak-height-70 ak-height-lg-30"></div>
                            <a href="{{ route('voucher.form') }}" class="hero-btn style-1 hero-gutschein-cta">
                                <span class="hero-gutschein-cta-icon">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 12V22H4V12" stroke="#040D10" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M22 7H2V12H22V7Z" stroke="#040D10" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 22V7" stroke="#040D10" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 7H7.5C6.83696 7 6.20107 6.73661 5.73223 6.26777C5.26339 5.79893 5 5.16304 5 4.5C5 3.83696 5.26339 3.20107 5.73223 2.73223C6.20107 2.26339 6.83696 2 7.5 2C11 2 12 7 12 7Z" stroke="#040D10" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 7H16.5C17.163 7 17.7989 6.73661 18.2678 6.26777C18.7366 5.79893 19 5.16304 19 4.5C19 3.83696 18.7366 3.20107 18.2678 2.73223C17.7989 2.26339 17.163 2 16.5 2C13 2 12 7 12 7Z" stroke="#040D10" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </span>
                                <span class="hero-gutschein-cta-text">
                                    <span class="hero-gutschein-cta-title">Gutschein kaufen</span>
                                    <span class="hero-gutschein-cta-sub">Das perfekte Geschenk</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </section>
            <!-- End Hero -->

            <!-- Start Welcome / SEO Intro -->
            <section>
                <div class="ak-height-100 ak-height-lg-60"></div>
                <div class="container">
                    <div class="ak-section-heading ak-style-1 ak-type-1 text-center">
                        <div class="ak-section-subtitle">Willkommen bei Felicità</div>
                        <h2 class="ak-section-title anim-title">Ihr mediterranes Restaurant in Leipzig</h2>
                    </div>
                    <div class="ak-height-30 ak-height-lg-20"></div>
                    <p class="text-center" style="max-width:820px;margin:0 auto;">
                        Felicità ist Ihr mediterranes Restaurant in Leipzig – ein Ort, an dem authentische
                        italienische und mediterrane Küche auf herzliche Leipziger Gastfreundschaft trifft.
                        Von frisch zubereiteter Pasta über gegrillten Fisch bis hin zu saisonalen mediterranen
                        Klassikern erleben Sie bei uns echten kulinarischen Genuss in stilvollem Ambiente.
                        Reservieren Sie Ihren Tisch für ein besonderes Essen in Leipzig oder verschenken Sie
                        einen Felicità-Gutschein für unvergessliche kulinarische Momente.
                    </p>
                </div>
                <div class="ak-height-100 ak-height-lg-60"></div>
            </section>
            <!-- End Welcome / SEO Intro -->

            <!-- Start Sliding Text -->
            <div class="ak-moving-section-wrap ak-normal text-uppercase">
                <div class="ak-moving-section-in">
                    <div class="ak-moving-section">
                        <h2><span>Begeben</span> Sie sich auf ein kulinarisches <span>Abenteuer</span>, begleitet von <span>unseren
                                erlesenen</span> Gerichten</h2>
                    </div>
                    <div class="ak-moving-section">
                        <h2><span>Begeben</span> Sie sich auf ein kulinarisches <span>Abenteuer</span>, begleitet von <span>unseren
                                erlesenen</span> Gerichten</h2>
                    </div>
                </div>
            </div>
            <!-- End Sliding Text -->

            <!-- Start Opening Hour -->
            <section class="ak-bg-secendary">

                <div class="opening-hour">
                    <div class="opening-hour-img-section">
                        <img src="{{ asset('assets/img/barfelicita.webp') }}" class="opening-bg-img ak-bg" alt="..."
                            data-speed="auto">
                        <div class="overlap-opening-img"></div>
                    </div>
                    <div class="opening-hour-text-section">
                        <h2 class="opening-hour-title anim-title-2">Öffnungszeiten</h2>
                        <div class="ak-height-30 ak-height-lg-30"></div>
                        <p class="opening-hour-subtext">Mitten im Herzen von Leipzig verschmilzt kulinarische
                            Handwerkskunst mit außergewöhnlichem Genuss – für Momente, die einfach begeistern.</p>
                        <div class="ak-height-30 ak-height-lg-30"></div>
                        <div class="opening-hour-date">
                            <p>MONTAG – SONNTAG</p>
                            <div class="opening-hour-hr"></div>
                            <p>11:00 – 22:00 UHR</p>
                        </div>
                        <div class="ak-height-70 ak-height-lg-30"></div>
                        <div class="text-btn">
                            <a href="{{ route('reservations') }}" class="text-btn1">
                                Reservierung
                            </a>
                        </div>

                        <div class="ak-height-lg-60"></div>

                    </div>
                </div>

            </section>
            <!-- End  Opening Hou  -->

            <!-- Start Food item show case -->
            <section>
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="container-fluid">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="ak-section-subtitle">Unsere Speisen</div>
                        <h2 class="ak-section-title anim-title">Kulinarische Highlights</h2>
                    </div>
                    <div class="ak-height-65 ak-height-lg-30"></div>
                    <div class="ak-slider ak-slider-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="ak-card ak-style-1">
                                    <div class="ak-card-img">
                                        <img src="{{ asset('assets/img/fel11.webp') }}" alt="Felicità" />
                                        <span class="ak-card-gradient"></span>
                                        <span class="ak-card-logo">
                                            <img src="{{ asset('assets/img/felicita glass.png') }}" alt="Felicità">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ak-card ak-style-1">
                                    <div class="ak-card-img">
                                        <img src="{{ asset('assets/img/fel12.webp') }}" alt="Felicità" />
                                        <span class="ak-card-gradient"></span>
                                        <span class="ak-card-logo">
                                            <img src="{{ asset('assets/img/felicita glass.png') }}" alt="Felicità">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ak-card ak-style-1">
                                    <div class="ak-card-img">
                                        <img src="{{ asset('assets/img/fel13.webp') }}" alt="Felicità" />
                                        <span class="ak-card-gradient"></span>
                                        <span class="ak-card-logo">
                                            <img src="{{ asset('assets/img/felicita glass.png') }}" alt="Felicità">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ak-card ak-style-1">
                                    <div class="ak-card-img">
                                        <img src="{{ asset('assets/img/fel14.webp') }}" alt="Felicità" />
                                        <span class="ak-card-gradient"></span>
                                        <span class="ak-card-logo">
                                            <img src="{{ asset('assets/img/felicita glass.png') }}" alt="Felicità">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="ak-card ak-style-1">
                                    <div class="ak-card-img">
                                        <img src="{{ asset('assets/img/fel15.webp') }}" alt="Felicità" />
                                        <span class="ak-card-gradient"></span>
                                        <span class="ak-card-logo">
                                            <img src="{{ asset('assets/img/felicita glass.png') }}" alt="Felicità">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="ak-next-prev-2">
                            <div class="ak-next-prev-2 ak-style-1">
                                <div class="ak-swiper-button-prev-2">
                                    <button class="btn-style-2 btn-size btn-style-round button-prev-next-2 rotate-svg"
                                        aria-disabled="false">
                                        <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#fff" fill="none" fill-rule="evenodd">
                                                <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                            </g>
                                        </svg>
                                        <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#fff" fill="none" fill-rule="evenodd">
                                                <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                                <div class="ak-pagination-2 ak-style1"></div>
                                <div class="ak-swiper-button-next-2">
                                    <button class="btn-style-2 btn-size btn-style-round button-prev-next-2"
                                        aria-disabled="false">
                                        <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#fff" fill="none" fill-rule="evenodd">
                                                <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                            </g>
                                        </svg>
                                        <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                            <g stroke="#fff" fill="none" fill-rule="evenodd">
                                                <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                            </g>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Food item show case -->

            <!-- Start Food Menu -->
            <section>
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="container">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="ak-section-subtitle">
                            Besondere Auswahl
                        </div>
                        <h2 class="ak-section-title anim-title">Speisekarte</h2>
                    </div>
                    <div class="ak-height-65 ak-height-lg-30"></div>
                    <div class="ak-menu-list">
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld1.jpg') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Vitello Tonnato</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>12,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Hauchdünn geschnittenes Kalbfleisch mit cremiger Thunfischsauce und Kapern</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld6.webp') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Gamberetti in Aglio</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>12,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Saftige Garnelen in aromatischem Weißwein-Zitrus-Sud mit Knoblauch</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld2.jpg') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Spaghetti Carbonara</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>10,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Nach traditioneller Rezeptur mit Guanciale, Eigelb und Pecorino</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld7.webp') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Spaghetti Felicità</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>15,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Cremige Cherrytomatensoße, Knoblauch und Riesengarnelen mit Rucola</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld3.webp') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Tagliatelle Tartufate</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>16,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Feine Sahnesauce mit Parmesan und aromatischem Trüffelcarpaccio</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld8.JPG') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Rumpsteak</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>25,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Gegrillt mit Kräuterbutter, dazu Butter-Tagliatelle und Sauce nach Wahl</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld4.jpg') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Salmone alla Griglia</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>23,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Lachs vom Grill serviert mit mediterranem Grillgemüse</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld9.jpg') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Pizza Quattro Formaggi</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>12,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Vier ausgewählte Käsesorten auf hausgemachter Tomatensauce</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld5.jpg') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Tiramisù</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>6,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Löffelbiskuits, Mascarpone, Espresso, Amaretto und Kakao</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ak-menu-list-section-1">
                            <img src="{{ asset('assets/img/felld10.jpg') }}" alt="...">
                            <div class="food-menu style-1">
                                <div class="food-menu-section-1">
                                    <div class="food-menu-title">
                                        <p>Aperol Spritz</p>
                                    </div>
                                    <div class="food-menu-hr">
                                        <div class="food-menu-hr style-1"></div>
                                        <div class="food-menu-hr style-1"></div>
                                    </div>
                                    <div class="food-menu-price">
                                        <p>7,90 €</p>
                                    </div>
                                </div>
                                <div class="food-menu-section-2">
                                    <div class="food-menu-subsitle">
                                        <p>Aperol, Prosecco, Soda und eine Orangenscheibe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ak-height-20 ak-height-lg-20"></div>
                    <div class="text-md-center">
                        <div class="text-btn">
                            <a href="{{ route('menu') }}" class="text-btn1">
                                Mehr entdecken
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Food Menu -->

            <div class="ak-height-150 ak-height-lg-60"></div>
            <!-- Start Best Item -->
            <section>
                <div class="container">
                    <div class="ak-best-item">
                        <div class="best-item-section-1">
                            <div class="ak-section-heading ak-style-1">
                                <div class="ak-section-subtitle">
                                    Unsere kulinarische Philosophie
                                </div>
                                <h2 class="ak-section-title anim-title-2"><span class="text-white"> Unsere</span> <br>
                                    Spezialitäten
                                </h2>
                            </div>
                            <div class="ak-height-30 ak-height-lg-30"></div>
                            <div>
                                <p>Felicità ist Ihr mediterranes Restaurant mitten in Leipzig, wo italienische
                                    Handwerkskunst auf mediterrane Lebensfreude trifft. Bei uns schaffen wir eine
                                    kulinarische Oase, die Ihre Sinne verwöhnt.
                                </p>
                            </div>
                            <div class="ak-height-50 ak-height-lg-30"></div>
                            <div class="img-one">
                                <img src="{{ asset('assets/img/fel1.webp') }}" alt="..." data-speed="1.2" data-lag="0">
                                <div class="img-overlay"></div>
                            </div>
                        </div>
                        <div class="best-item-section-2" data-speed="1.1" data-lag="1">
                            <img src="{{ asset('assets/img/star_line.svg') }}" alt="...">
                        </div>
                        <div class="best-item-section-3">
                            <div class="img-two">
                                <img src="{{ asset('assets/img/fel2.webp') }}" alt="..." data-speed="1.1" data-lag="0">
                                <div class="img-overlay"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Best Item -->

            <div class="ak-height-150 ak-height-lg-60"></div>
            <!-- Start Testimonial -->
            <section class="container">
                <div class="ak-slider ak-slider-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="testimonial-section">
                                    <div class="testimonial-icon-1">
                                        <img src="{{ asset('assets/img/testimonial_icon_l.svg') }}" alt="...">
                                    </div>
                                    <div class="testimonial-info-section">
                                        <div class="testimonial-info">
                                            <img src="{{ asset('assets/img/testimonial_1.jpg') }}" class="testimonial-info-img"
                                                alt="...">
                                            <h6 class="testimonial-info-title">Mareike Schulz</h6>
                                            <p class="short-title">Aus Leipzig-Connewitz</p>
                                            <p class="testimonial-info-subtitle">„Seit unserem ersten Besuch bei Felicità
                                                sind wir restlos begeistert – die Tagliatelle Tartufate waren
                                                unvergesslich, und das Ambiente lässt einen für einen Abend wirklich
                                                das Mittelmeer spüren.“</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-icon-1">
                                        <img src="{{ asset('assets/img/testimonial_icon_r.svg') }}" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="testimonial-section">
                                    <div class="testimonial-icon-1">
                                        <img src="{{ asset('assets/img/testimonial_icon_l.svg') }}" alt="...">
                                    </div>
                                    <div class="testimonial-info-section">
                                        <div class="testimonial-info">
                                            <img src="{{ asset('assets/img/testimonial_2.jpg') }}" class="testimonial-info-img"
                                                alt="...">
                                            <h6 class="testimonial-info-title">Jonas Bergmann</h6>
                                            <p class="short-title">Aus Leipzig-Plagwitz</p>
                                            <p class="testimonial-info-subtitle">„Endlich ein Restaurant in Leipzig, das
                                                mediterrane Küche so ehrlich und mit so viel Liebe zum Detail umsetzt.
                                                Der Service ist herzlich, die Weinkarte top – wir kommen garantiert
                                                wieder.“</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-icon-1">
                                        <img src="{{ asset('assets/img/testimonial_icon_r.svg') }}" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="testimonial-section">
                                    <div class="testimonial-icon-1">
                                        <img src="{{ asset('assets/img/testimonial_icon_l.svg') }}" alt="...">
                                    </div>
                                    <div class="testimonial-info-section">
                                        <div class="testimonial-info">
                                            <img src="{{ asset('assets/img/testimonial_3.jpg') }}" class="testimonial-info-img"
                                                alt="...">
                                            <h6 class="testimonial-info-title">Franziska Hoffmann</h6>
                                            <p class="short-title">Aus Leipzig-Gohlis</p>
                                            <p class="testimonial-info-subtitle">„Wir haben einen Felicità-Gutschein zum
                                                Geburtstag geschenkt bekommen und waren hin und weg. Vom Vitello Tonnato
                                                bis zum Tiramisù – jeder Gang ein kleines Kunstwerk.“</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-icon-1">
                                        <img src="{{ asset('assets/img/testimonial_icon_r.svg') }}" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="ak-swiper-controll-3">
                        <div class="ak-swiper-navigation-wrap">
                            <div class="ak-swiper-button-prev-3">
                                <button class="btn-style-2 btn-size btn-style-round button-prev-next-2 rotate-svg"
                                    aria-disabled="false">
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                </button>

                            </div>
                            <div class="ak-swiper-button-next-3">
                                <button class="btn-style-2 btn-size btn-style-round button-prev-next-2"
                                    aria-disabled="false">
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Testimonial -->

            <div class="ak-height-150 ak-height-lg-60"></div>
            <!-- Start Booking System -->
            <section>
                <div class="ak-booking-system">
                    <img class="ak-booking-system-bg-img ak-bg imagesZoom" src="{{ asset('assets/img/fel3.webp') }}"
                        alt="...">
                    <div class="ak-height-150 ak-height-lg-60"></div>
                    <div class="container">
                        <div class="row justify-content-center align-content-center align-items-center">
                            <div class="col-md-6 col-12">
                                <div class="ak-height-lg-60"></div>
                                <div class="ak-height-lg-60"></div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="booking-system-heading">
                                    <div class="ak-section-heading ak-style-1">
                                        <div class="ak-section-subtitle">
                                            Reservierungen
                                        </div>
                                        <h2 class="ak-section-title anim-title-2">Reservierungen
                                        </h2>
                                    </div>
                                    <div class="ak-height-60 ak-height-lg-30"></div>
                                    <div class="booking-system-form">
                                        <form>
                                            <div class="select">
                                                <select class="ak-form-select">
                                                    <option selected value="1">Eins</option>
                                                    <option value="2">Zwei</option>
                                                    <option value="3">Drei</option>
                                                </select>
                                                <div class="select-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10"
                                                        viewBox="0 0 18 10" fill="none">
                                                        <path
                                                            d="M8.99516 9.502C8.80335 9.502 8.61135 9.42869 8.46491 9.28225L0.964914 1.78225C0.671852 1.48919 0.671852 1.01463 0.964914 0.72175C1.25798 0.428875 1.73254 0.428688 2.02541 0.72175L8.99516 7.6915L15.9649 0.72175C16.258 0.428688 16.7325 0.428688 17.0254 0.72175C17.3183 1.01481 17.3185 1.48937 17.0254 1.78225L9.52541 9.28225C9.37898 9.42869 9.18698 9.502 8.99516 9.502Z"
                                                            fill="#FFD28D" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <div class="ak-form-time-date">
                                                <div class="ak-time">
                                                    <input value="03:45" class="time-input" type="time" name="time"
                                                        id="time">
                                                    <div class="time-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                            viewBox="0 0 24 25" fill="none">
                                                            <g clip-path="url(#clip0_1166_8212)">
                                                                <path
                                                                    d="M12 24.002C5.38581 24.002 0 18.6161 0 12.002C0 5.38777 5.38581 0.00195312 12 0.00195312C18.6142 0.00195312 24 5.38777 24 12.002C24 18.6161 18.6142 24.002 12 24.002ZM12 1.14474C6.01423 1.14474 1.14279 6.01618 1.14279 12.002C1.14279 17.9877 6.01423 22.8592 12 22.8592C17.9858 22.8592 22.8572 17.9877 22.8572 12.002C22.8572 6.01618 17.9858 1.14474 12 1.14474Z"
                                                                    fill="#FFD28D" />
                                                                <path
                                                                    d="M11.4287 4.00195H12.5717V10.2876H11.4287V4.00195Z"
                                                                    fill="#FFD28D" />
                                                                <path
                                                                    d="M11.4287 13.7168H12.5717V16.5739H11.4287V13.7168Z"
                                                                    fill="#FFD28D" />
                                                                <path
                                                                    d="M12.0001 14.2884C10.7431 14.2884 9.71436 13.2596 9.71436 12.0026C9.71436 10.7455 10.7431 9.7168 12.0001 9.7168C13.2572 9.7168 14.2859 10.7455 14.2859 12.0026C14.2859 13.2596 13.2572 14.2884 12.0001 14.2884ZM12.0001 10.8598C11.3715 10.8598 10.8574 11.374 10.8574 12.0026C10.8574 12.6312 11.3715 13.1454 12.0001 13.1454C12.6288 13.1454 13.1429 12.6312 13.1429 12.0026C13.1429 11.374 12.6288 10.8598 12.0001 10.8598Z"
                                                                    fill="#FFD28D" />
                                                            </g>
                                                            <defs>
                                                                <clipPath id="clip0_1166_8212">
                                                                    <rect width="24" height="24" fill="white"
                                                                        transform="translate(0 0.00195312)" />
                                                                </clipPath>
                                                            </defs>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="ak-date">
                                                    <input class="date-input" value="2023-07-22" type="date" name="date"
                                                        id="date">
                                                    <div class="date-icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                                            viewBox="0 0 25 25" fill="none">
                                                            <mask id="mask0_1166_8220" style="mask-type:luminance"
                                                                maskUnits="userSpaceOnUse" x="0" y="0" width="25"
                                                                height="25">
                                                                <path
                                                                    d="M0.995117 0.140627H24.9951V24.1406H0.995117V0.140627Z"
                                                                    fill="white" />
                                                            </mask>
                                                            <g mask="url(#mask0_1166_8220)">
                                                                <path
                                                                    d="M12.0732 18.6094H13.917M17.6152 18.6094H19.4589M6.54198 18.6094H8.38571M12.0732 13.0781H13.917M17.6152 13.0781H19.4589M6.54198 13.0781H8.38571M1.93262 8.45311H24.0683M18.537 5.68749V1.07813M7.46387 5.68749V1.07813M5.63077 23.2031H20.3701C22.4125 23.2031 24.0683 21.5474 24.0683 19.5049V6.62006C24.0683 4.57763 22.4125 2.92186 20.3701 2.92186H5.63077C3.58834 2.92186 1.93262 4.57763 1.93262 6.62006V19.5049C1.93262 21.5474 3.58834 23.2031 5.63077 23.2031Z"
                                                                    stroke="#FFD28D" stroke-miterlimit="10"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="ak-height-110 ak-height-lg-90"></div>
                                            <div class="ak-btn style-5">
                                                <button type="submit">Reservierungen
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ak-height-150 ak-height-lg-60"></div>
                </div>
            </section>
            <!-- End Booking System -->

        </main>
        <div class="ak-height-150 ak-height-lg-60"></div>

        <!-- Start Footer -->
        <x-footer />
        <!-- End Footer -->
    </div>

    <div class="loading-overlap"></div>
    <!-- End Footer -->

    <!-- Start scrollup Section -->
    <x-scrollup />
    <!-- End scrollup Section -->

    <!-- Start Video Popup -->
    <x-videopopup />
    <!-- End Video Popup -->

    <!-- Start script Section -->
    <x-script />
    <!-- End script Section -->

</body>

</html>