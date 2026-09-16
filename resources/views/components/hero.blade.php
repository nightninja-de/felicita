<!-- Start Hero -->
@php
    $heroImage = match (true) {
        request()->routeIs('menu') => asset('assets/img/fel4.jpg'),
        request()->routeIs(['about', 'reservations', 'contact']) => asset('assets/img/ufel.webp'),
        default => asset('assets/img/banner_top_all.png'),
    };
    $heroHasGradient = request()->routeIs(['menu', 'about', 'reservations', 'contact']);
@endphp
    <Section>
        <div class="ak-commmon-hero ak-style1 ak-bg {{ $heroHasGradient ? 'ak-commmon-hero-gradient' : '' }}" data-src="{{ $heroImage }}">
            <div class="ak-commmon-heading">
                <div class="ak-section-heading ak-style-1 ak-type-1 ak-color-1 page-top-title">
                    <div class="ak-section-subtitle">
                        <a href="{{ route('index') }}">Startseite</a> / <?php echo (isset($title) ? $title   : '')?>
                    </div>
                    <h2 class="ak-section-title page-title-anim"><?php echo (isset($subTitle) ? $subTitle   : '')?></h2>
                </div>
            </div>
        </div>
    </Section>
<!-- End Hero -->