@extends('layout.layout')

@php
    $title='Unsere Speisekarte';
    $subTitle = 'Unsere Speisekarte';
@endphp

@section('content')

<!-- Start Food Menu Vorspeisen-->
<section class="set-bg-img-section">
    <img src="{{ asset('assets/img/fel5.jpg') }}" alt="..." data-speed="1.1" class="imagesZoom bg-img ak-bg">
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="container">
        <div class="ak-section-heading ak-style-1 ak-type-1">
            <div class="ak-section-subtitle">
                Kalte &amp; Warme Vorspeisen
            </div>
            <h2 class="ak-section-title anim-title">Vorspeisen</h2>
        </div>
        <div class="ak-height-65 ak-height-lg-30"></div>
        <div class="ak-menu-list">
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Bruschetta Classica (3 Stück)</p>
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
                            <p>Geröstete Brotscheiben mit Tomatenwürfel und roten Zwiebeln</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
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
                            <p>Hauchdünn geschnittenes Kalbfleisch, veredelt mit einer cremigen Thunfischsauce und Kapern – ein echter Klassiker</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Carpaccio di Manzo</p>
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
                            <p>Hauchdünnes Rinderfilet, serviert mit Rucola, frisch gehobeltem Parmesan und einem Hauch Zitrone &amp; Olivenöl</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Gegrillte Peperoni</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1"></div>
                            <div class="food-menu-hr style-1"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>9,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Verfeinert mit Knoblauchöl, dazu hausgemachtes Tzatziki</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
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
                            <p>10 Stück saftige Garnelen in aromatischem Weißwein-Zitrus-Sud mit frischem Knoblauch, dazu Aioli und geröstetes Brot</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Manitaria</p>
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
                            <p>Gefüllte Champignons mit Hackfleisch in würziger Metaxasauce, mit Käse überbacken</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Feta auf Rucolabett</p>
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
                            <p>Knusprig panierter Schafskäse auf frischem Rucolasalat, veredelt mit Balsamico Creme</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_2.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Bruschetta Grande à la Caprese</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1"></div>
                            <div class="food-menu-hr style-1"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>8,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Riesenbruschetta mit frischen Tomaten, Mozzarella goldbraun überbacken</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ak-height-50 ak-height-lg-20"></div>
        <div class="text-center">
            <a href="{{ asset('assets/karte.pdf') }}" target="_blank" rel="noopener" class="ak-btn style-5 color-yellow-bg">
                Mehr anzeigen
            </a>
        </div>
    </div>
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="ak-height-150 ak-height-lg-0"></div>
</section>
<!-- End Food Menu Vorspeisen-->

<!-- Start Food Menu Hauptspeisen-->
<section class="set-bg-img-section">
    <img src="{{ asset('assets/img/fel6.avif') }}" alt="..." data-speed="1.1" class="bg-img ak-bg imagesZoom">
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="container">
        <div class="ak-section-heading ak-style-1 ak-type-1">
            <div class="ak-section-subtitle">
                Pasta, Fleisch &amp; Fisch
            </div>
            <h2 class="ak-section-title anim-title">Hauptspeisen</h2>
        </div>
        <div class="ak-height-65 ak-height-lg-30"></div>
        <div class="ak-menu-list">
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Spaghetti Carbonara</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>10,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Nach traditioneller Rezeptur – mit Guanciale (Speck), Eigelb und Pecorino</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Spaghetti Felicità</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>15,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Nudeln in cremiger Cherrytomatensoße und Knoblauch, dazu Riesengarnelen verfeinert mit frischem Rucola</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Tagliatelle Tartufate</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>16,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Bandnudeln in feiner Sahnesauce mit Parmesan und aromatischem Trüffelcarpaccio</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Lasagne della Casa</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>13,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Hausgemachte Lasagne nach Art des Hauses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Pollo alla Caprese</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>16,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Gegrillte Hähnchenbrust mit Tomaten &amp; Mozzarella leicht überbacken, dazu Rosmarinkartoffeln</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Rumpsteak</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>25,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Gegrillt mit Kräuterbutter, dazu Butter-Tagliatelle und Sauce nach Wahl (Champignon-, Metaxa- oder Gorgonzolasoße)</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Lammkoteletts</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>22,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>5 gegrillte Lammkoteletts mit saisonalem Grillgemüse und Tzatziki</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Salmone alla Griglia</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
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
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Gambas</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>23,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>5 gegrillte Riesengarnelen serviert mit gemischtem Salat</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Kabeljau in Orangen-Senf-Sauce</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>18,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Zartes Filet mit hausgemachter Orangen-Senf-Sauce, dazu Tagliatelle im aromatischen Sud</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ak-height-50 ak-height-lg-20"></div>
        <div class="text-center">
            <a href="{{ asset('assets/karte.pdf') }}" target="_blank" rel="noopener" class="ak-btn style-5 color-yellow-bg">
                Mehr anzeigen
            </a>
        </div>
    </div>
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="ak-height-150 ak-height-lg-0"></div>
</section>
<!-- End Food Menu Hauptspeisen-->

<!-- Start Food Menu Nachtisch-->
<section class="set-bg-img-section">
    <img src="{{ asset('assets/img/fel7.webp') }}" alt="..." data-speed="1.1" class="bg-img ak-bg imagesZoom">
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="container">
        <div class="ak-section-heading ak-style-1 ak-type-1">
            <div class="ak-section-subtitle">
                Süße Träume
            </div>
            <h2 class="ak-section-title anim-title">Nachtisch</h2>
        </div>
        <div class="ak-height-65 ak-height-lg-30"></div>
        <div class="ak-menu-list">
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Tiramisù</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>6,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Löffelbiskuits, Mascarpone, Espresso, Amaretto und Kakao – ein hausgemachter, geschichteter Dessert-Traum</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Panna Cotta</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1  anim-2"></div>
                            <div class="food-menu-hr style-1  anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>6,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Sahnedessert mit Fruchtspiegel</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Joghurt nach griechischer Art</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>6,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Naturjoghurt veredelt mit Honig und Walnüssen</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Sorbetto al Limone</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>6,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Zitronensorbet – eine echte Reise nach Sizilien</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Schokosoufflé</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-2"></div>
                            <div class="food-menu-hr style-1 anim-2"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>6,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Luftige Schokoküchlein mit flüssigem Kern, dazu Vanilleeis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ak-height-50 ak-height-lg-20"></div>
        <div class="text-center">
            <a href="{{ asset('assets/karte.pdf') }}" target="_blank" rel="noopener" class="ak-btn style-5 color-yellow-bg">
                Mehr anzeigen
            </a>
        </div>
    </div>
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="ak-height-150 ak-height-lg-0"></div>
</section>
<!-- End Food Menu Nachtisch-->

<!-- Start Food Menu Getränke-->
<section class="set-bg-img-section">
    <img src="{{ asset('assets/img/fel8.jpg') }}" alt="..." data-speed="1.1" class="bg-img ak-bg imagesZoom">
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="container">
        <div class="ak-section-heading ak-style-1 ak-type-1">
            <div class="ak-section-subtitle">
                Bollicine, Wein &amp; mehr
            </div>
            <h2 class="ak-section-title anim-title">Getränke</h2>
        </div>
        <div class="ak-height-65 ak-height-lg-30"></div>
        <div class="ak-menu-list">
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Aperol Spritz</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>7,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Aperol, Prosecco, Soda, Orangenscheibe</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Hugo</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>7,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Holunderblütensirup, Prosecco, Soda, Minze, Limette</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Gin Tonic</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>6,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Klassischer Longdrink mit Gin und Tonic Water</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Primitivo (Rotwein)</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>0,2 l 7,90 € / 0,5 l 16,50 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Halbtrocken, vollmundig, beerig</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Grauburgunder (Weißwein)</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>0,2 l 7,90 € / 0,5 l 16,50 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Trocken, frisch, harmonisch</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Bitburger Pils</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>0,3 l 3,50 € / 0,5 l 5,50 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Vom Fass</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Cappuccino</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>3,20 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Klassischer italienischer Cappuccino</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Espresso</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>2,00 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Kurz, stark, italienisch</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Cola / Cola Zero</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>0,2 l 2,90 € / 0,4 l 4,40 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Erfrischend kalt serviert</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ak-menu-list-section-1">
                <img src="{{ asset('assets/img/item-show_3.png') }}" alt="...">
                <div class="food-menu style-1">
                    <div class="food-menu-section-1">
                        <div class="food-menu-title">
                            <p>Acqua Morelli</p>
                        </div>
                        <div class="food-menu-hr">
                            <div class="food-menu-hr style-1 anim-3"></div>
                            <div class="food-menu-hr style-1 anim-3"></div>
                        </div>
                        <div class="food-menu-price">
                            <p>0,25 l 2,60 € / 0,75 l 6,90 €</p>
                        </div>
                    </div>
                    <div class="food-menu-section-2">
                        <div class="food-menu-subsitle">
                            <p>Still oder spritzig</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ak-height-50 ak-height-lg-20"></div>
        <div class="text-center">
            <a href="{{ asset('assets/karte.pdf') }}" target="_blank" rel="noopener" class="ak-btn style-5 color-yellow-bg">
                Mehr anzeigen
            </a>
        </div>
    </div>
    <div class="ak-height-150 ak-height-lg-60"></div>
    <div class="ak-height-150 ak-height-lg-0"></div>
</section>
<!-- End Food Menu Getränke-->

@endsection
