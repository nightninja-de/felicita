@extends('layout.layout')

@php
    $title = 'Über uns';
    $subTitle = 'Über uns';
    $metaDescription = 'Lernen Sie Felicità kennen – Ihr mediterranes Restaurant in Leipzig. Authentische italienische Küche, frische Zutaten und echte Gastfreundschaft.';
@endphp

@section('content')

<!-- Start About -->
<section class="ak-about-bg-color">
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="ak-about ak-style-1">
        <div class="ak-about-bg-img ak-bg">
            <img class="imagesZoom" src="{{ asset('assets/img/fel2.webp') }}" alt="...">
        </div>
        <div class="ak-about-hr"></div>
        <div class="container">
            <div class="about-section ak-about-1">
                <div class="about-text-section">
                    <h2 class="about-title">Exquisites kulinarisches Erlebnis, würdig für
                        <br><span class="anim-title-2">Königshäuser</span>
                    </h2>
                    <div class="ak-height-30 ak-height-lg-30"></div>
                    <p class="about-subtext">Willkommen in unserem Restaurant, wo kulinarische Kunstfertigkeit auf
                        außergewöhnliche Genussmomente trifft. Wir sind bestrebt, ein gastronomisches Paradies zu
                        schaffen, das Ihren Gaumen verwöhnt und Ihnen unvergessliche Erinnerungen schenkt.
                    </p>
                    <div class="ak-height-30 ak-height-lg-30"></div>
                    <p class="about-subtext">Willkommen in unserem Restaurant, wo kulinarische Kunstfertigkeit auf
                        außergewöhnliche Genussmomente trifft. Wir sind bestrebt, ein gastronomisches Paradies zu schaffen.
                    </p>
                    <div class="ak-height-50 ak-height-lg-30"></div>
                    <div class="text-btn">
                        <a href="{{ route('about') }}" class="text-btn1">
                            Die Küche entdecken
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- End About -->

<!-- Start Testimonial -->
<section class="container">
    <div class="ak-height-150 ak-height-lg-60"></div>
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
                                <img src="{{ asset('assets/img/testimonial_1.jpg') }}" class="testimonial-info-img" alt="...">
                                <h6 class="testimonial-info-title">Steven K. Roberts</h6>
                                <p class="short-title">Aus den USA</p>
                                <p class="testimonial-info-subtitle">„Das talentierte Team leidenschaftlicher Köche
                                    kreiert jedes Gericht meisterhaft und vereint erlesenste Zutaten mit
                                    innovativen Techniken zu kulinarischen Kreationen, die ebenso beeindruckend
                                    aussehen wie sie schmecken.“</p>
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
                                <img src="{{ asset('assets/img/testimonial_1.jpg') }}" class="testimonial-info-img" alt="...">
                                <h6 class="testimonial-info-title">Steven K. Roberts</h6>
                                <p class="short-title">Aus den USA</p>
                                <p class="testimonial-info-subtitle">„Das talentierte Team leidenschaftlicher Köche
                                    kreiert jedes Gericht meisterhaft und vereint erlesenste Zutaten mit
                                    innovativen Techniken zu kulinarischen Kreationen, die ebenso beeindruckend
                                    aussehen wie sie schmecken.“</p>
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
                                <img src="{{ asset('assets/img/testimonial_1.jpg') }}" class="testimonial-info-img" alt="...">
                                <h6 class="testimonial-info-title">Steven K. Roberts</h6>
                                <p class="short-title">Aus den USA</p>
                                <p class="testimonial-info-subtitle">„Das talentierte Team leidenschaftlicher Köche
                                    kreiert jedes Gericht meisterhaft und vereint erlesenste Zutaten mit
                                    innovativen Techniken zu kulinarischen Kreationen, die ebenso beeindruckend
                                    aussehen wie sie schmecken.“</p>
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
                    <button class="btn-style-2 btn-size btn-style-round button-prev-next-2 rotate-svg" aria-disabled="false">
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
                    <button class="btn-style-2 btn-size btn-style-round button-prev-next-2" aria-disabled="false">
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

<!-- Start Opening Hour -->
<section class="container">
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="opening-hour type-2">
        <div class="opening-hour-img-section style-2">
            <img src="{{ asset('assets/img/u2fel.webp') }}" class="imagesZoom opening-bg-img ak-bg" alt="...">
            <div class="overlap-opening-img"></div>
        </div>
        <div class="opening-hour-text-section type-2">
            <h2 class="opening-hour-title  anim-title-2">Öffnungszeiten</h2>
            <div class="ak-height-30 ak-height-lg-30"></div>
            <p class="opening-hour-subtext">Willkommen in unserem Restaurant, wo kulinarische Kunstfertigkeit auf
                außergewöhnliche Genussmomente trifft. Wir sind bestrebt, ein gastronomisches Paradies zu schaffen.</p>
            <div class="ak-height-30 ak-height-lg-30"></div>
            <div class="opening-hour-date">
                <p>SONNTAG - DONNERSTAG: 11:30 - 23:00 Uhr</p>
                <div class="opening-hour-hr"></div>
                <p> FREITAG & SAMSTAG: 11:30 - 24:00 Uhr</p>
            </div>
            <div class="ak-height-70 ak-height-lg-30"></div>
            <div class="text-btn">
                <a href="{{ route('reservations') }}" class="text-btn1">
                    Reservierung
                </a>

            </div>
        </div>
    </div>
</section>
<!-- End  Opening Hour  -->

@endsection