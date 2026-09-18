@extends('layout.layout')

@php
    $title = 'Tisch reservieren';
    $subTitle = 'Reservierung';
    $metaDescription = 'Reservieren Sie jetzt Ihren Tisch bei Felicità, Ihrem mediterranen Restaurant in Leipzig. Schnell, einfach und unverbindlich online buchen.';
@endphp

@section('content')

<!-- Start Booking System -->
<section>
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="container-fluid">
        <div class="ak-booking-system-map-from">
            <div class="booking-system-map">
                <div class="booking-system-map-frist">
                    <div class="ak-google-map ak-bg">
                        <iframe src="https://www.google.com/maps?q=Felicit%C3%A0+mediterran+Restaurant%2C+Anton-Zickmantel-Str.+44%2C+04249+Leipzig&output=embed" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="booking-system-map-second">
                    <div class="booking-system-heading">
                        <div class="ak-section-heading ak-style-1">
                            <div class="ak-section-subtitle">
                                Reservierung
                            </div>
                            <h2 class="ak-section-title anim-title-3 objects-up-down">Reservierungen
                            </h2>
                        </div>
                        <div class="ak-height-60 ak-height-lg-30"></div>
                        <div class="booking-system-form">
                            <button id="voucherBtn" type="button" class="hero-btn style-1 hero-gutschein-cta" style="margin-bottom:20px;">
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
                                    <span class="hero-gutschein-cta-title">Gutschein sichern</span>
                                    <span class="hero-gutschein-cta-sub">Das perfekte Geschenk</span>
                                </span>
                            </button>
                            @include('components.voucher_modal')

                            @if (session('reservation_success'))
                                <p style="color:#FFD28D; margin-bottom:20px;">Vielen Dank! Ihre Reservierungsanfrage wurde übermittelt. Wir melden uns in Kürze bei Ihnen.</p>
                            @endif

                            <form method="POST" action="{{ route('reservations.store') }}">
                                @csrf
                                <div class="reservation-contact-fields">
                                    <input type="text" name="name" placeholder="Ihr Name" value="{{ old('name') }}" required>
                                    @error('name') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror

                                    <input type="email" name="email" placeholder="Ihre E-Mail" value="{{ old('email') }}" required>
                                    @error('email') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror

                                    <input type="tel" name="phone" placeholder="Ihre Telefonnummer" value="{{ old('phone') }}" required>
                                    @error('phone') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror
                                </div>
                                <div class="ak-height-20 ak-height-lg-20"></div>
                                <div class="select">
                                    <select class="ak-form-select" name="guests" id="guestsSelect">
                                        <option selected value="1">1 Gast</option>
                                        <option value="2">2 Gäste</option>
                                        <option value="3">3 Gäste</option>
                                        <option value="4">4 Gäste</option>
                                        <option value="5">5 Gäste</option>
                                        <option value="6">6 Gäste</option>
                                        <option value="7">7 Gäste</option>
                                        <option value="other">Andere Anzahl</option>
                                    </select>
                                    <div class="select-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="10" viewBox="0 0 18 10" fill="none">
                                            <path d="M8.99516 9.502C8.80335 9.502 8.61135 9.42869 8.46491 9.28225L0.964914 1.78225C0.671852 1.48919 0.671852 1.01463 0.964914 0.72175C1.25798 0.428875 1.73254 0.428688 2.02541 0.72175L8.99516 7.6915L15.9649 0.72175C16.258 0.428688 16.7325 0.428688 17.0254 0.72175C17.3183 1.01481 17.3185 1.48937 17.0254 1.78225L9.52541 9.28225C9.37898 9.42869 9.18698 9.502 8.99516 9.502Z" fill="#FFD28D" />
                                        </svg>
                                    </div>
                                </div>
                                <input type="number" id="guestsCustomInput" min="8" max="50" placeholder="Anzahl der Gäste eingeben" class="guests-custom-input" style="display:none;">
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var select = document.getElementById('guestsSelect');
                                        var custom = document.getElementById('guestsCustomInput');
                                        if (!select || !custom) return;

                                        function toggleCustomGuests() {
                                            if (select.value === 'other') {
                                                custom.style.display = 'block';
                                                custom.required = true;
                                                select.removeAttribute('name');
                                                custom.name = 'guests';
                                            } else {
                                                custom.style.display = 'none';
                                                custom.required = false;
                                                custom.removeAttribute('name');
                                                select.name = 'guests';
                                            }
                                        }

                                        select.addEventListener('change', toggleCustomGuests);
                                        toggleCustomGuests();
                                    });
                                </script>
                                <div class="ak-form-time-date">
                                    <div class="ak-time">
                                        <input value="{{ old('time', '19:00') }}" min="11:00" max="22:00" class="time-input" type="time" name="time" id="time">
                                        <div class="time-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                                <g clip-path="url(#clip0_1166_8212)">
                                                    <path d="M12 24.002C5.38581 24.002 0 18.6161 0 12.002C0 5.38777 5.38581 0.00195312 12 0.00195312C18.6142 0.00195312 24 5.38777 24 12.002C24 18.6161 18.6142 24.002 12 24.002ZM12 1.14474C6.01423 1.14474 1.14279 6.01618 1.14279 12.002C1.14279 17.9877 6.01423 22.8592 12 22.8592C17.9858 22.8592 22.8572 17.9877 22.8572 12.002C22.8572 6.01618 17.9858 1.14474 12 1.14474Z" fill="#FFD28D" />
                                                    <path d="M11.4287 4.00195H12.5717V10.2876H11.4287V4.00195Z" fill="#FFD28D" />
                                                    <path d="M11.4287 13.7168H12.5717V16.5739H11.4287V13.7168Z" fill="#FFD28D" />
                                                    <path d="M12.0001 14.2884C10.7431 14.2884 9.71436 13.2596 9.71436 12.0026C9.71436 10.7455 10.7431 9.7168 12.0001 9.7168C13.2572 9.7168 14.2859 10.7455 14.2859 12.0026C14.2859 13.2596 13.2572 14.2884 12.0001 14.2884ZM12.0001 10.8598C11.3715 10.8598 10.8574 11.374 10.8574 12.0026C10.8574 12.6312 11.3715 13.1454 12.0001 13.1454C12.6288 13.1454 13.1429 12.6312 13.1429 12.0026C13.1429 11.374 12.6288 10.8598 12.0001 10.8598Z" fill="#FFD28D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1166_8212">
                                                        <rect width="24" height="24" fill="white" transform="translate(0 0.00195312)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ak-date">
                                        <input class="date-input" value="{{ old('date', now()->format('Y-m-d')) }}" min="{{ now()->format('Y-m-d') }}" type="date" name="date" id="date">
                                        <div class="date-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                                                <mask id="mask0_1166_8220" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="25" height="25">
                                                    <path d="M0.995117 0.140627H24.9951V24.1406H0.995117V0.140627Z" fill="white" />
                                                </mask>
                                                <g mask="url(#mask0_1166_8220)">
                                                    <path d="M12.0732 18.6094H13.917M17.6152 18.6094H19.4589M6.54198 18.6094H8.38571M12.0732 13.0781H13.917M17.6152 13.0781H19.4589M6.54198 13.0781H8.38571M1.93262 8.45311H24.0683M18.537 5.68749V1.07813M7.46387 5.68749V1.07813M5.63077 23.2031H20.3701C22.4125 23.2031 24.0683 21.5474 24.0683 19.5049V6.62006C24.0683 4.57763 22.4125 2.92186 20.3701 2.92186H5.63077C3.58834 2.92186 1.93262 4.57763 1.93262 6.62006V19.5049C1.93262 21.5474 3.58834 23.2031 5.63077 23.2031Z" stroke="#FFD28D" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>

                                </div>
                                @error('date') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror
                                @error('time') <p style="color:#e57373; font-size:14px;">{{ $message }}</p> @enderror
                                <div class="ak-height-110 ak-height-lg-90"></div>
                                <div class="ak-btn style-5">
                                    <button type="submit">Jetzt reservieren
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Booking System -->

<!-- Start Nearby Location -->
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
<!-- End Nearby Location -->

@endsection