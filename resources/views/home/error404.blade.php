<!DOCTYPE html>
<html class="no-js" lang="de">

<!-- Start head  -->
<x-head />
<!-- End head  -->

<body>

    <!-- Start preloader  -->
    <x-preloader />
    <!-- End preloader  -->

    <!-- Start Header Section -->
    <x-header />
    <!-- End Header Section -->

    <div id="scrollsmoother-container">

        <div class="section-all-item-center" data-src="{{ asset('assets/img/errorBg.png') }}">
            <div class="border-comming-soon-colum-right"></div>
            <div class="border-comming-soon-top"></div>
            <div class="container text-center">
                <h2 class="item-title-number">404</h2>
                <h2 class="item-title">Entschuldigung! Diese Seite wurde hier nicht gefunden</h2>
                <p class="item-subtext">Glücklicherweise handelt es sich hierbei meist um ein einfach zu behebendes
                    Problem. Möglicherweise wurde der Link falsch eingegeben, die Seite verschoben oder ist derzeit
                    nicht verfügbar. Bitte überprüfen Sie die eingegebene Adresse oder kehren Sie zu unserer
                    Startseite zurück.</p>
                <a href="{{ route('index') }}">
                    <div class="ak-btn style-5 mt-4">
                        Zurück zur Startseite
                    </div>
                </a>
            </div>
            <div class="border-comming-soon-colum-left"></div>
            <div class="border-comming-soon-bottom"></div>
        </div>

        <!-- Start Footer -->
        <footer>
            <span class="ak-scrollup">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
                </svg>
            </span>
        </footer>
        <!-- End Footer -->
    </div>

    <!-- Start script Section -->
    <x-script />
    <!-- End script Section -->

</body>

</html>