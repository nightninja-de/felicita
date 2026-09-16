@extends('layout.layout')

@php
    $title='Kontakt';
    $subTitle = 'Kontakt';
@endphp

@section('content')

<div id="scrollsmoother-container">

    <!-- Start Booking System -->
    <section>
        <div class="ak-height-150 ak-height-lg-60"></div>
        <div class="container">
            <div class="contact-content">
                <div class="contact-form">
                    <h2 class="contact-form-title anim-title-3">Kontaktieren Sie uns</h2>

                    @if (session('contact_success'))
                        <p style="color:#FFD28D; margin-bottom:20px;">Vielen Dank für Ihre Nachricht! Wir melden uns in Kürze bei Ihnen.</p>
                    @endif

                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="from-input">
                            <input placeholder="Ihr Name" class="col-md-5 col-12" type="text" name="name" value="{{ old('name') }}" required>
                            <input placeholder="Ihre E-Mail" class="col-md-5 col-12" type="email" name="email" value="{{ old('email') }}" required>
                        </div>
                        @error('name') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror
                        @error('email') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror
                        <div class="col-md-12">
                            <textarea name="message" rows="5" class="col-12 col-md-10" placeholder="Ihre Nachricht" required>{{ old('message') }}</textarea>
                        </div>
                        @error('message') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror
                        <div class="ak-height-40 ak-height-lg-20"></div>
                        <div class="ak-btn style-5">
                            <button type="submit">Nachricht senden</button>
                        </div>
                    </form>

                </div>
                <div class="contact-map">
                    <div class="booking-system-map-frist">
                        <div class="ak-google-map ak-bg">
                            <iframe src="https://www.google.com/maps?q=Felicit%C3%A0+mediterran+Restaurant%2C+Anton-Zickmantel-Str.+44%2C+04249+Leipzig&output=embed" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- End Booking System -->

    <!-- Start Location -->
    <section>
        <div class="ak-height-150 ak-height-lg-60"></div>
        <div class="container">
            <div class="ak-section-heading ak-style-1 ak-type-1">
                <div class="ak-section-subtitle">
                    Sehenswertes in der Nähe
                </div>
                <h2 class="ak-section-title anim-title">Sehenswürdigkeiten in Leipzig entdecken</h2>
            </div>
        </div>
        <div class="ak-height-65 ak-height-lg-30"></div>
        <div class="container">
            <div class="location-card location-card-style-1">
                <div class="location-card-item style-1">
                    <a href="https://www.google.com/maps/search/?api=1&query=V%C3%B6lkerschlachtdenkmal+Leipzig" target="_blank" rel="noopener">
                        <div class="card-icon">
                            <svg viewBox="0 0 40 41" height="41" width="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 11.127C16.1403 11.127 13 14.1177 13 17.7936C13 18.8971 13.2897 19.9913 13.8404 20.9618L19.6172 28.9121C19.6941 29.0448 19.8407 29.127 20 29.127C20.1593 29.127 20.3059 29.0448 20.3828 28.9121L26.1617 20.9585C26.7103 19.9913 27 18.8971 27 17.7936C27 14.1177 23.8597 11.127 20 11.127ZM20 21.127C18.0701 21.127 16.5 19.6316 16.5 17.7936C16.5 15.9557 18.0701 14.4603 20 14.4603C21.9299 14.4603 23.5 15.9557 23.5 17.7936C23.5 19.6316 21.9299 21.127 20 21.127Z" fill="white" />
                            </svg>
                        </div>
                        <h6 class="card-title">
                            Völkerschlachtdenkmal
                        </h6>
                        <p class="card-subtext">Historisches Nationaldenkmal</p>
                        <p>Leipzig</p>
                        <p>Route &amp; Kontakt anzeigen →</p>
                    </a>
                </div>
                <div class="location-card-item style-1">
                    <a href="https://www.google.com/maps/search/?api=1&query=Thomaskirche+Leipzig" target="_blank" rel="noopener">
                        <div class="card-icon">
                            <svg viewBox="0 0 40 41" height="41" width="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 11.127C16.1403 11.127 13 14.1177 13 17.7936C13 18.8971 13.2897 19.9913 13.8404 20.9618L19.6172 28.9121C19.6941 29.0448 19.8407 29.127 20 29.127C20.1593 29.127 20.3059 29.0448 20.3828 28.9121L26.1617 20.9585C26.7103 19.9913 27 18.8971 27 17.7936C27 14.1177 23.8597 11.127 20 11.127ZM20 21.127C18.0701 21.127 16.5 19.6316 16.5 17.7936C16.5 15.9557 18.0701 14.4603 20 14.4603C21.9299 14.4603 23.5 15.9557 23.5 17.7936C23.5 19.6316 21.9299 21.127 20 21.127Z" fill="white" />
                            </svg>
                        </div>
                        <h6 class="card-title">
                            Thomaskirche
                        </h6>
                        <p class="card-subtext">Bachs Wirkungsstätte</p>
                        <p>Leipzig</p>
                        <p>Route &amp; Kontakt anzeigen →</p>
                    </a>
                </div>
                <div class="location-card-item">
                    <a href="https://www.google.com/maps/search/?api=1&query=Nikolaikirche+Leipzig" target="_blank" rel="noopener">
                        <div class="card-icon">
                            <svg viewBox="0 0 40 41" height="41" width="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 11.127C16.1403 11.127 13 14.1177 13 17.7936C13 18.8971 13.2897 19.9913 13.8404 20.9618L19.6172 28.9121C19.6941 29.0448 19.8407 29.127 20 29.127C20.1593 29.127 20.3059 29.0448 20.3828 28.9121L26.1617 20.9585C26.7103 19.9913 27 18.8971 27 17.7936C27 14.1177 23.8597 11.127 20 11.127ZM20 21.127C18.0701 21.127 16.5 19.6316 16.5 17.7936C16.5 15.9557 18.0701 14.4603 20 14.4603C21.9299 14.4603 23.5 15.9557 23.5 17.7936C23.5 19.6316 21.9299 21.127 20 21.127Z" fill="white" />
                            </svg>
                        </div>
                        <h6 class="card-title">
                            Nikolaikirche
                        </h6>
                        <p class="card-subtext">Ausgangspunkt der Friedlichen Revolution</p>
                        <p>Leipzig</p>
                        <p>Route &amp; Kontakt anzeigen →</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="ak-loaction-hr"></div>
        <div class="container">
            <div class="location-card location-card-style-1">
                <div class="location-card-item style-1">
                    <a href="https://www.google.com/maps/search/?api=1&query=Neues+Rathaus+Leipzig" target="_blank" rel="noopener">
                        <div class="card-icon">
                            <svg viewBox="0 0 40 41" height="41" width="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 11.127C16.1403 11.127 13 14.1177 13 17.7936C13 18.8971 13.2897 19.9913 13.8404 20.9618L19.6172 28.9121C19.6941 29.0448 19.8407 29.127 20 29.127C20.1593 29.127 20.3059 29.0448 20.3828 28.9121L26.1617 20.9585C26.7103 19.9913 27 18.8971 27 17.7936C27 14.1177 23.8597 11.127 20 11.127ZM20 21.127C18.0701 21.127 16.5 19.6316 16.5 17.7936C16.5 15.9557 18.0701 14.4603 20 14.4603C21.9299 14.4603 23.5 15.9557 23.5 17.7936C23.5 19.6316 21.9299 21.127 20 21.127Z" fill="white" />
                            </svg>
                        </div>
                        <h6 class="card-title">
                            Neues Rathaus
                        </h6>
                        <p class="card-subtext">Leipzigs historisches Rathaus</p>
                        <p>Leipzig</p>
                        <p>Route &amp; Kontakt anzeigen →</p>
                    </a>
                </div>
                <div class="location-card-item style-1">
                    <a href="https://www.google.com/maps/search/?api=1&query=Augustusplatz+Leipzig" target="_blank" rel="noopener">
                        <div class="card-icon">
                            <svg viewBox="0 0 40 41" height="41" width="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 11.127C16.1403 11.127 13 14.1177 13 17.7936C13 18.8971 13.2897 19.9913 13.8404 20.9618L19.6172 28.9121C19.6941 29.0448 19.8407 29.127 20 29.127C20.1593 29.127 20.3059 29.0448 20.3828 28.9121L26.1617 20.9585C26.7103 19.9913 27 18.8971 27 17.7936C27 14.1177 23.8597 11.127 20 11.127ZM20 21.127C18.0701 21.127 16.5 19.6316 16.5 17.7936C16.5 15.9557 18.0701 14.4603 20 14.4603C21.9299 14.4603 23.5 15.9557 23.5 17.7936C23.5 19.6316 21.9299 21.127 20 21.127Z" fill="white" />
                            </svg>
                        </div>
                        <h6 class="card-title">
                            Augustusplatz
                        </h6>
                        <p class="card-subtext">Gewandhaus &amp; Oper Leipzig</p>
                        <p>Leipzig</p>
                        <p>Route &amp; Kontakt anzeigen →</p>
                    </a>
                </div>
                <div class="location-card-item">
                    <a href="https://www.google.com/maps/search/?api=1&query=Zoo+Leipzig" target="_blank" rel="noopener">
                        <div class="card-icon">
                            <svg viewBox="0 0 40 41" height="41" width="40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 11.127C16.1403 11.127 13 14.1177 13 17.7936C13 18.8971 13.2897 19.9913 13.8404 20.9618L19.6172 28.9121C19.6941 29.0448 19.8407 29.127 20 29.127C20.1593 29.127 20.3059 29.0448 20.3828 28.9121L26.1617 20.9585C26.7103 19.9913 27 18.8971 27 17.7936C27 14.1177 23.8597 11.127 20 11.127ZM20 21.127C18.0701 21.127 16.5 19.6316 16.5 17.7936C16.5 15.9557 18.0701 14.4603 20 14.4603C21.9299 14.4603 23.5 15.9557 23.5 17.7936C23.5 19.6316 21.9299 21.127 20 21.127Z" fill="white" />
                            </svg>
                        </div>
                        <h6 class="card-title">
                            Zoo Leipzig
                        </h6>
                        <p class="card-subtext">Einer der artenreichsten Zoos Europas</p>
                        <p>Leipzig</p>
                        <p>Route &amp; Kontakt anzeigen →</p>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Location -->

@endsection