<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @php
        $pageTitle = ! empty($title) ? $title.' | Felicità Leipzig' : 'Felicità Leipzig | Bestes Mediterranes Restaurant in Leipzig';
        $pageDescription = $metaDescription ?? 'Felicità in Leipzig – Ihr mediterranes Restaurant für authentische italienische und mediterrane Küche. Frische Pasta, Fisch vom Grill und mediterrane Klassiker in stilvollem Ambiente. Jetzt Tisch reservieren oder Gutschein verschenken.';
    @endphp
    <meta name="author" content="Felicità Leipzig" />
    <meta name="description" content="{{ $pageDescription }}" />
    <meta name="keywords" content="Felicità Leipzig, Felicita Leipzig, Felicita mediterranes Restaurant, mediterranean restaurant Leipzig, mediterranes Restaurant Leipzig, italienisches Restaurant Leipzig, Restaurant Leipzig Reservierung, mediterrane Küche Leipzig, Gutschein Restaurant Leipzig" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Open Graph / Social -->
    <meta property="og:type" content="restaurant" />
    <meta property="og:site_name" content="Felicità Leipzig" />
    <meta property="og:title" content="{{ $pageTitle }}" />
    <meta property="og:description" content="{{ $pageDescription }}" />
    <meta property="og:image" content="{{ asset('assets/img/herofelicita.webp') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="de_DE" />
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets/img/flogog.png') }}" type="image/png" />
    <link rel="shortcut icon" href="{{ asset('assets/img/flogog.png') }}" type="image/png" />
    <!-- Site Title -->
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Structured Data: Restaurant -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "name": "Felicità Leipzig",
        "alternateName": ["Felicita Leipzig", "Felicita Restaurant Leipzig", "Felicità Restaurant"],
        "servesCuisine": ["Mediterran", "Italienisch"],
        "description": "Felicità ist ein mediterranes Restaurant in Leipzig mit authentischer italienischer und mediterraner Küche, frischen Zutaten und stilvollem Ambiente.",
        "image": "{{ asset('assets/img/herofelicita.webp') }}",
        "url": "{{ url('/') }}",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Anton-Zickmantel-Str. 44",
            "postalCode": "04249",
            "addressLocality": "Leipzig",
            "addressCountry": "DE"
        },
        "telephone": "+49 341 24806093",
        "email": "support@felicita-restaurant.com",
        "priceRange": "€€",
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "11:00",
            "closes": "22:00"
        }
    }
    </script>
</head>