@php
    $locale = $locale ?? 'en';
    $service = $service ?? 'sourcing';
    $isFr = $locale === 'fr';
    $isSupply = $service === 'supply';
    $isLogistics = $service === 'logistics';
    $isOem = $service === 'oem';
    $isTrade = $service === 'trade';
    $isConsulting = $service === 'consulting';
    $isEquipment = $service === 'equipment';
    $isOperations = $service === 'operations';
    $langLink = fn (string $lang) => request()->fullUrlWithQuery(['lang' => $lang, 'service' => $service]);
    $serviceLink = fn (string $target) => route('services', ['lang' => $locale, 'service' => $target]);
    $copy = trans('services');

    if ($isSupply) {
        $copy['hero_title'] = $copy['supply_hero_title'];
        $copy['hero_subtitle'] = $copy['supply_hero_subtitle'];
        $copy['title'] = 'Magnum Multi Services SARL - ' . $copy['supply_hero_title'];
    }

    if ($isLogistics) {
        $copy['hero_title'] = $copy['logistics_hero_title'];
        $copy['hero_subtitle'] = $copy['logistics_hero_subtitle'];
        $copy['title'] = 'Magnum Multi Services SARL - ' . $copy['logistics_hero_title'];
    }

    if ($isOem) {
        $copy['hero_title'] = $copy['oem_hero_title'];
        $copy['hero_subtitle'] = $copy['oem_hero_subtitle'];
        $copy['title'] = 'Magnum Multi Services SARL - ' . $copy['oem_hero_title'];
    }

    if ($isTrade) {
        $copy['hero_title'] = $copy['trade_hero_title'];
        $copy['hero_subtitle'] = $copy['trade_hero_subtitle'];
        $copy['title'] = 'Magnum Multi Services SARL - ' . $copy['trade_hero_title'];
    }

    if ($isConsulting) {
        $copy['hero_title'] = $copy['consulting_hero_title'];
        $copy['hero_subtitle'] = $copy['consulting_hero_subtitle'];
        $copy['title'] = 'Magnum Multi Services SARL - ' . $copy['consulting_hero_title'];
    }

    if ($isEquipment) {
        $copy['hero_title'] = $copy['equipment_hero_title'];
        $copy['hero_subtitle'] = $copy['equipment_hero_subtitle'];
        $copy['title'] = 'Magnum Multi Services SARL - ' . $copy['equipment_hero_title'];
    }

    if ($isOperations) {
        $copy['hero_title'] = $copy['operations_hero_title'];
        $copy['hero_subtitle'] = $copy['operations_hero_subtitle'];
        $copy['title'] = 'Magnum Multi Services SARL - ' . $copy['operations_hero_title'];
    }

    $serviceHeroImages = [
        'sourcing' => '/images/home-card-sourcing.png',
        'supply' => '/images/home-proposal-ship.png',
        'logistics' => '/images/home-card-logistics.png',
        'oem' => '/images/home-card-oem.png',
        'trade' => '/images/home-card-trade.png',
        'consulting' => '/images/home-card-consulting.png',
        'equipment' => '/images/services-oem.jpg',
        'operations' => '/images/home-carousel-4.png',
    ];

    $heroImage = $serviceHeroImages[$service] ?? '/images/services-hero.jpg';
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $copy['title'] }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}?v=20260715-3" rel="stylesheet">
    <script src="{{ asset('js/services.js') }}?v=20260715-2" defer></script>
</head>
<body id="top">
    <main class="page services-page">
        <section class="hero services-hero" style="--hero-image: url('{{ $heroImage }}')">
            <header class="topbar d-flex align-items-start gap-4">
                <a class="brand flex-shrink-0" href="{{ route('home', ['lang' => $locale]) }}">
                    <img src="/images/logo-full-ntwb.png" alt="Magnum Multi Services SARL">
                </a>

                <button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" data-menu-toggle data-open-label="{{ $copy['mobile_menu'] }}" data-close-label="{{ $copy['mobile_menu_close'] }}" aria-label="{{ $copy['mobile_menu'] }}">
                    <i class="fa-solid fa-bars open-icon" aria-hidden="true"></i>
                    <i class="fa-solid fa-xmark close-icon" aria-hidden="true"></i>
                </button>
                @include('partials.main-nav', ['activePage' => 'services'])
            </header>

            <div class="hero-copy">
                <h1>{{ $copy['hero_title'] }}</h1>
                <p>{{ $copy['hero_subtitle'] }}</p>
            </div>
        </section>

        <section class="service-section">
            <div class="service-content">
                <aside aria-label="Services">
                    <div class="services-sidebar">
                        <h2>{{ $copy['sidebar_title'] }}</h2>
                        <a class="service-link {{ $service === 'supply' ? 'active' : '' }}" href="{{ $serviceLink('supply') }}">{{ $copy['supply_chain'] }}</a>
                        <a class="service-link {{ $service === 'sourcing' ? 'active' : '' }}" href="{{ $serviceLink('sourcing') }}">{{ $copy['sourcing'] }}</a>
                        <a class="service-link {{ $service === 'logistics' ? 'active' : '' }}" href="{{ $serviceLink('logistics') }}">{{ $copy['logistics'] }}</a>
                        <a class="service-link {{ $service === 'oem' ? 'active' : '' }}" href="{{ $serviceLink('oem') }}">{{ $copy['oem'] }}</a>
                        <a class="service-link {{ $service === 'trade' ? 'active' : '' }}" href="{{ $serviceLink('trade') }}">{{ $copy['trade'] }}</a>
                        <a class="service-link {{ $service === 'consulting' ? 'active' : '' }}" href="{{ $serviceLink('consulting') }}">{{ $copy['consulting'] }}</a>
                        <a class="service-link {{ $service === 'equipment' ? 'active' : '' }}" href="{{ $serviceLink('equipment') }}">{{ $copy['equipment'] }}</a>
                        <a class="service-link {{ $service === 'operations' ? 'active' : '' }}" href="{{ $serviceLink('operations') }}">{{ $copy['operations'] }}</a>
                    </div>
                    @if ($isConsulting)
                        <div class="consulting-side-photo" aria-label="Consulting advisor visual"></div>
                    @endif
                </aside>

                @if ($isSupply)
                    <article class="content-column supply-layout">
                        <h2 class="section-title">{{ $copy['supply_hero_title'] }}</h2>
                        <p class="section-kicker">{{ $copy['supply_hero_subtitle'] }}</p>

                        <p class="lead-copy">{{ $copy['supply_intro_1'] }}</p>
                        <p class="lead-copy">{{ $copy['supply_intro_2'] }}</p>

                        <div class="supply-content-grid">
                            <div>
                                <h3 class="supply-services-title">{{ $copy['supply_services_title'] }}</h3>

                                <h4>{{ $copy['supply_procurement_title'] }}</h4>
                                <p>{{ $copy['supply_procurement_text'] }}</p>

                                <h4>{{ $copy['supply_inventory_title'] }}</h4>
                                <p>{{ $copy['supply_inventory_text'] }}</p>

                                <h4>{{ $copy['supply_delivery_title'] }}</h4>
                                <p>{{ $copy['supply_delivery_text'] }}</p>

                                <p class="supply-contact"><strong>{{ $copy['get_in_touch'] }}</strong> {{ $copy['supply_contact_text'] }}</p>
                            </div>

                            <div class="supply-photo" aria-label="Supply chain management visual"></div>
                        </div>
                    </article>
                @elseif ($isLogistics)
                    <article class="content-column logistics-layout">
                        <h2 class="section-title">{{ $copy['logistics'] }}</h2>
                        <p class="section-kicker">{{ $copy['logistics_hero_subtitle'] }}</p>

                        <p class="lead-copy">{{ $copy['logistics_lead_1'] }}</p>
                        <p class="lead-copy">{{ $copy['logistics_lead_2'] }}</p>

                        <h3 class="infrastructure-title">{{ $copy['infrastructure_title'] }}</h3>

                        <div class="logistics-bottom">
                            <div class="logistics-bottom-copy">
                                <div class="logistics-points">
                                    <h4>{{ $copy['hub_title'] }}</h4>
                                    <p>{{ $copy['hub_text'] }}</p>

                                    <h4>{{ $copy['tech_title'] }}</h4>
                                    <p>{{ $copy['tech_text'] }}</p>

                                    <h4>{{ $copy['fleet_title'] }}</h4>
                                    <p>{{ $copy['fleet_text'] }}</p>
                                </div>

                                <p class="logistics-contact"><strong>{{ $copy['contact_title'] }}</strong> {{ $copy['logistics_contact_text'] }}</p>
                            </div>

                            <div class="logistics-photo" aria-label="Logistics solutions visual"></div>
                        </div>
                    </article>
                @elseif ($isOem)
                    <article class="content-column oem-layout">
                        <h2 class="section-title">{{ $copy['oem_hero_title'] }}</h2>
                        <p class="section-kicker">{{ $copy['oem_hero_subtitle'] }}</p>

                        <p class="lead-copy">{{ $copy['oem_intro_1'] }}</p>
                        <p class="lead-copy">{{ $copy['oem_intro_2'] }}</p>

                        <h3 class="oem-services-title">{{ $copy['oem_services_title'] }}</h3>

                        <h4>{{ $copy['stock_title'] }}</h4>
                        <p class="point-copy">{{ $copy['stock_text'] }}</p>

                        <h4>{{ $copy['pricing_title'] }}</h4>
                        <p class="point-copy">{{ $copy['pricing_text'] }}</p>

                        <div class="oem-contact">
                            <h3>{{ $copy['get_in_touch'] }}</h3>
                            <p>{{ $copy['oem_contact_text'] }}</p>
                        </div>
                    </article>
                @elseif ($isTrade)
                    <article class="content-column trade-layout">
                        <h2 class="section-title">{{ $copy['trade_hero_title'] }}</h2>
                        <p class="section-kicker">{{ $copy['trade_hero_subtitle'] }}</p>

                        <p class="lead-copy">{{ $copy['trade_intro_1'] }}</p>
                        <p class="lead-copy">{{ $copy['trade_intro_2'] }}</p>

                        <div class="trade-content-grid">
                            <div>
                                <h3 class="trade-services-title">{{ $copy['trade_services_title'] }}</h3>

                                <h4>{{ $copy['trade_product_title'] }}</h4>
                                <p class="point-copy">{{ $copy['trade_product_intro'] }}</p>
                                <ul class="trade-products">
                                    @foreach ($copy['trade_products'] as $product)
                                        <li>{{ $product }}</li>
                                    @endforeach
                                </ul>

                                <p class="trade-contact"><strong>{{ $copy['get_in_touch'] }}</strong> {{ $copy['trade_contact_text'] }}</p>
                            </div>

                            <div class="trade-photo" aria-label="General Trade B2B visual"></div>
                        </div>
                    </article>
                @elseif ($isConsulting)
                    <article class="content-column consulting-layout">
                        <h2 class="section-title">{{ $copy['consulting_hero_title'] }}</h2>
                        <p class="section-kicker">{{ $copy['consulting_hero_subtitle'] }}</p>

                        <p class="lead-copy">{{ $copy['consulting_intro_1'] }}</p>
                        <p class="lead-copy">{{ $copy['consulting_intro_2'] }}</p>

                        <div class="consulting-points">
                            <h3>{{ $copy['consulting_why_title'] }}</h3>

                            <h4>{{ $copy['consulting_strategy_title'] }}</h4>
                            <p>{{ $copy['consulting_strategy_text'] }}</p>

                            <h4>{{ $copy['consulting_expertise_title'] }}</h4>
                            <p>{{ $copy['consulting_expertise_text'] }}</p>

                            <h4>{{ $copy['consulting_success_title'] }}</h4>
                            <p>{{ $copy['consulting_success_text'] }}</p>
                        </div>

                        <p class="consulting-contact"><strong>{{ $copy['get_in_touch'] }}</strong> {{ $copy['consulting_contact_text'] }}</p>
                    </article>
                @elseif ($isEquipment)
                    <article class="content-column trade-layout">
                        <h2 class="section-title">{{ $copy['equipment_hero_title'] }}</h2>
                        <p class="section-kicker">{{ $copy['equipment_hero_subtitle'] }}</p>

                        @foreach ($copy['equipment_intro'] as $paragraph)
                            <p class="lead-copy">{{ $paragraph }}</p>
                        @endforeach

                        <div class="trade-content-grid">
                            <div>
                                <h3 class="trade-services-title">{{ $copy['equipment_services_title'] }}</h3>
                                <ul class="trade-products">
                                    @foreach ($copy['equipment_items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>

                                <p class="trade-contact"><strong>{{ $copy['contact_title'] }}</strong> {{ $copy['equipment_contact_text'] }}</p>
                            </div>

                            <div class="supply-photo" aria-label="Industrial equipment supply visual"></div>
                        </div>
                    </article>
                @elseif ($isOperations)
                    <article class="content-column trade-layout">
                        <h2 class="section-title">{{ $copy['operations_hero_title'] }}</h2>
                        <p class="section-kicker">{{ $copy['operations_hero_subtitle'] }}</p>

                        @foreach ($copy['operations_intro'] as $paragraph)
                            <p class="lead-copy">{{ $paragraph }}</p>
                        @endforeach

                        <div class="trade-content-grid">
                            <div>
                                <h3 class="trade-services-title">{{ $copy['operations_services_title'] }}</h3>
                                <ul class="trade-products">
                                    @foreach ($copy['operations_items'] as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>

                                <p class="trade-contact"><strong>{{ $copy['contact_title'] }}</strong> {{ $copy['operations_contact_text'] }}</p>
                            </div>

                            <div class="consulting-side-photo" aria-label="Operational support visual"></div>
                        </div>
                    </article>
                @else
                    <article class="content-column">
                        <div>
                            <h2 class="section-title">{{ $copy['sourcing'] }}</h2>
                            <p class="section-kicker">{{ $copy['hero_subtitle'] }}</p>

                            <p class="lead-copy">
                                {{ $copy['lead'] }}
                            </p>

                            <h3>{{ $copy['why'] }}</h3>

                            <h4>{{ $copy['range_title'] }}</h4>
                            <p class="point-copy">{{ $copy['range_text'] }}</p>

                            <h4>{{ $copy['quality_title'] }}</h4>
                            <p class="point-copy">{{ $copy['quality_text'] }}</p>

                            <h4>{{ $copy['supply_title'] }}</h4>
                            <p class="point-copy">{{ $copy['supply_text'] }}</p>
                        </div>

                        <div class="consulting-photo" aria-label="Sourcing consultation visual"></div>

                        <div class="contact-block">
                            <h3>{{ $copy['contact_title'] }}</h3>
                            <p>{{ $copy['contact_text'] }}</p>
                        </div>
                    </article>
                @endif
            </div>
        </section>

        <footer class="site-footer">
            <div class="footer-inner">
                <a class="footer-logo" href="/">
                    <img src="/images/logo-magnum-footer-w.png" alt="Magnum Multi Services SARL">
                </a>

                <section class="footer-column" aria-labelledby="footer-contact">
                    <h2 id="footer-contact">{{ $copy['footer_contact'] }}</h2>
                    <ul class="footer-contact-list">
                        <li>
                            <span class="icon" aria-hidden="true"><i class="fa-solid fa-house"></i></span>
                            <span>{!! $copy['footer_address'] !!}</span>
                        </li>
                        <li>
                            <span class="icon" aria-hidden="true"><i class="fa-solid fa-phone"></i></span>
                            <span>+243 823 234 444</span>
                        </li>
                        <li>
                            <span class="icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
                            <span>info@magnum-msgroup.cd</span>
                        </li>
                    </ul>
                </section>

                <nav class="footer-column" aria-labelledby="footer-navigation">
                    <h2 id="footer-navigation">{{ $copy['footer_quick'] }}</h2>
                    <ul class="footer-links">
                        <li><a href="{{ route('home', ['lang' => $locale]) }}">{{ $copy['nav_home'] }}</a></li>
                        <li><a href="{{ route('about', ['lang' => $locale]) }}">{{ $copy['nav_about'] }}</a></li>
                        <li><a href="{{ route('services', ['lang' => $locale]) }}">{{ $copy['nav_services'] }}</a></li>
                        <li><a href="{{ route('sectors', ['lang' => $locale]) }}">{{ $copy['nav_industrial'] }}</a></li>
                        <li><a href="{{ route('privacy-policy', ['lang' => $locale]) }}">{{ $copy['footer_privacy'] }}</a></li>
                        <li><a href="{{ route('sites', ['lang' => $locale]) }}">{{ $copy['nav_locations'] }}</a></li>
                    </ul>
                </nav>

                <section class="footer-column" aria-labelledby="footer-services">
                    <h2 id="footer-services">{{ $copy['footer_services'] }}</h2>
                    <ul class="footer-links">
                        <li><a href="{{ $serviceLink('supply') }}">{{ $copy['supply_chain'] }}</a></li>
                        <li><a href="{{ $serviceLink('sourcing') }}">{{ $copy['sourcing'] }}</a></li>
                        <li><a href="{{ $serviceLink('logistics') }}">{{ $copy['logistics'] }}</a></li>
                        <li><a href="{{ $serviceLink('oem') }}">{{ $copy['oem'] }}</a></li>
                        <li><a href="{{ $serviceLink('trade') }}">{{ $copy['trade'] }}</a></li>
                        <li><a href="{{ $serviceLink('consulting') }}">{{ $copy['consulting'] }}</a></li>
                        <li><a href="{{ $serviceLink('equipment') }}">{{ $copy['equipment'] }}</a></li>
                        <li><a href="{{ $serviceLink('operations') }}">{{ $copy['operations'] }}</a></li>
                    </ul>
                </section>

                <a class="back-to-top" href="#top" aria-label="{{ $copy['back_to_top'] }}"><i class="fa-solid fa-arrow-up"></i></a>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-inner">
                    <p class="copyright">Copyright &copy; {{ now()->year }} {{ $copy['footer_copyright'] }}</p>
                    <nav class="social-links" aria-label="Social media">
                        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    </nav>
                </div>
            </div>
            <span class="footer-ghost-card" aria-hidden="true"></span>
        </footer>
        @include('partials.cookie-consent')
    </main>
</body>
</html>

