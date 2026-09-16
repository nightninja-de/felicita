<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Felicità Leipzig" />
    <meta name="description" content="Felicità in Leipzig – mediterranes Restaurant für authentische italienische und mediterrane Küche. Frische Pasta, Fisch vom Grill und mediterrane Klassiker in stilvollem Ambiente. Jetzt Tisch reservieren oder Gutschein verschenken." />
    <meta name="keywords" content="mediterranes Restaurant Leipzig, italienisches Restaurant Leipzig, Felicità Leipzig, Restaurant Leipzig Reservierung, mediterrane Küche Leipzig, Gutschein Restaurant Leipzig" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <!-- Open Graph / Social -->
    <meta property="og:type" content="restaurant" />
    <meta property="og:site_name" content="Felicità" />
    <meta property="og:title" content="Bestes Mediterranes Restaurant in Leipzig | Felicità" />
    <meta property="og:description" content="Authentische mediterrane und italienische Küche mitten in Leipzig. Frische Zutaten, herzliche Gastfreundschaft und ein stilvolles Ambiente – reservieren Sie jetzt Ihren Tisch bei Felicità." />
    <meta property="og:image" content="{{ asset('assets/img/herofelicita.webp') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:locale" content="de_DE" />
    <!-- Favicon Icon -->
    <link rel="icon" href="{{ asset('assets/img/flogog.png') }}" type="image/png" />
    <link rel="shortcut icon" href="{{ asset('assets/img/flogog.png') }}" type="image/png" />
    <!-- Site Title -->
    <title>Bestes Mediterranes Restaurant in Leipzig | Felicità</title>
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/lightgallery.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <!-- Structured Data: Restaurant -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Restaurant",
        "name": "Felicità",
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