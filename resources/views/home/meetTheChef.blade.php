@extends('layout.layout')

@php
    $title='Über den Küchenchef';
    $subTitle = 'Über den Küchenchef';
@endphp

@section('content')

<!-- Start About Content -->
<section>
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="container">
        <div class="meet-the-content-about-section">
            <div class="about-info">
                <div class="ak-section-heading ak-style-1 ak-color-1">
                    <p>Küchenchef</p>
                    <h2 class="ak-section-title anim-title-3">Über Alex Smith</h2>
                </div>
                <div class="ak-height-25 ak-height-lg-25"></div>
                <p>Willkommen in unserem Restaurant, wo kulinarische Kunstfertigkeit auf außergewöhnliche
                    Genussmomente trifft. Wir sind bestrebt, ein gastronomisches Paradies zu schaffen, das Ihren
                    Gaumen verwöhnt und Ihnen unvergessliche Erinnerungen schenkt. Willkommen in unserem Restaurant,
                    wo kulinarische Kunstfertigkeit auf außergewöhnliche Genussmomente trifft.
                </p>
                <div class="ak-height-25 ak-height-lg-25"></div>
                <p>Mit Leidenschaft und Hingabe vereint er erlesenste Zutaten mit innovativen Techniken zu
                    kulinarischen Kreationen, die ebenso beeindruckend aussehen wie sie schmecken. Sein Anspruch
                    ist es, jedem Gast ein unvergessliches Geschmackserlebnis zu bereiten.</p>
                <div class="ak-height-45 ak-height-lg-30"></div>
                <div class="text-btn">
                    <a href="https://www.youtube.com/watch?v=UsD1MhKBmD4" class="text-btn1 ak-video-open">
                        Expertise ansehen
                    </a>
                </div>

            </div>
            <div class="about-img">
                <img src="{{ asset('assets/img/meetAbout.jpg') }}" class="imagesZoom" data-speed="1.1" alt="meetAbout">
            </div>
            <div class="about-social">
                <a href="#">FACEBOOK</a>
                <a href="#">LINKEDING</a>
                <a href="#">INSTAGRAM</a>
            </div>

        </div>

    </div>
</section>
<!-- End About Content -->

@endsection