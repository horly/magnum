@php
    $locale = $locale ?? 'fr';
    $isFr = $locale === 'fr';
    $copy = trans('services');
    $langLink = fn (string $lang) => route('home', ['lang' => $lang]);
    $serviceLink = fn (string $target) => route('services', ['lang' => $locale, 'service' => $target]);
    $serviceIcons = [
        'supply' => 'fa-diagram-project',
        'sourcing' => 'fa-magnifying-glass-chart',
        'logistics' => 'fa-truck-fast',
        'oem' => 'fa-boxes-stacked',
        'trade' => 'fa-handshake',
        'consulting' => 'fa-compass-drafting',
    ];
    $industryIcons = [
        'fa-mountain-city',
        'fa-helmet-safety',
        'fa-industry',
        'fa-bolt',
        'fa-seedling',
        'fa-heart-pulse',
        'fa-truck-fast',
        'fa-road-bridge',
        'fa-ship',
        'fa-anchor',
        'fa-hands-holding-circle',
    ];
    $whyIcons = [
        'fa-shield-halved',
        'fa-globe',
        'fa-layer-group',
        'fa-handshake-angle',
        'fa-bolt',
        'fa-briefcase',
        'fa-chart-line',
    ];
    $contactBannerIcons = [
        'fa-boxes-packing',
        'fa-truck-fast',
        'fa-handshake',
        'fa-headset',
        'fa-diagram-project',
        'fa-sliders',
        'fa-seedling',
    ];
    $industrySlides = array_chunk($copy['home_industries'], 4, true);
    $heroSlideMedia = [
        [
            'image' => '/images/home-carousel-1.png',
            'primary_url' => route('services', ['lang' => $locale]),
            'secondary_url' => '#home-contact',
        ],
        [
            'image' => '/images/home-carousel-2.png',
            'primary_url' => $serviceLink('sourcing'),
            'secondary_url' => '#home-contact',
        ],
        [
            'image' => '/images/home-carousel-3.png',
            'primary_url' => route('services', ['lang' => $locale]),
            'secondary_url' => '#home-contact',
        ],
        [
            'image' => '/images/home-carousel-4.png',
            'primary_url' => $serviceLink('oem'),
            'secondary_url' => '#home-contact',
        ],
    ];
    $heroSlides = [
        ...array_map(fn ($slide, $media) => array_merge($slide, $media), $copy['home_carousel_slides'], $heroSlideMedia),
    ];
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $copy['home_title'] }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}?v=20260608-10" rel="stylesheet">
    <script src="{{ asset('js/services.js') }}?v=20260608-1" defer></script>
</head>
<body id="top">
    <main class="page home-page">
        <section class="home-shell">
            <header class="topbar d-flex align-items-start gap-4">
                <a class="brand flex-shrink-0" href="{{ route('home', ['lang' => $locale]) }}">
                    <img src="/images/logo-full-ntw.png" alt="Magnum Multi Services SARL">
                </a>

                <button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" data-menu-toggle data-open-label="{{ $copy['mobile_menu'] }}" data-close-label="{{ $copy['mobile_menu_close'] }}" aria-label="{{ $copy['mobile_menu'] }}">
                    <i class="fa-solid fa-bars open-icon" aria-hidden="true"></i>
                    <i class="fa-solid fa-xmark close-icon" aria-hidden="true"></i>
                </button>

                <nav class="main-nav" id="primary-navigation" aria-label="Primary navigation">
                    <a class="active" href="{{ route('home', ['lang' => $locale]) }}">{{ $copy['nav_home'] }}</a>
                    <a href="{{ route('about', ['lang' => $locale]) }}">{{ $copy['nav_about'] }}</a>
                    <a href="{{ route('services', ['lang' => $locale]) }}">{{ $copy['nav_services'] }}</a>
                    <a href="{{ route('sectors', ['lang' => $locale]) }}">{{ $copy['nav_industrial'] }}</a>
                    <a href="{{ route('ssl-schedules', ['lang' => $locale]) }}">{{ $copy['nav_ssl'] }}</a>
                    <a href="{{ route('sites', ['lang' => $locale]) }}">{{ $copy['nav_locations'] }}</a>
                    <a href="{{ route('privacy-policy', ['lang' => $locale]) }}">{{ $copy['footer_privacy'] }}</a>

                    <span class="language-switch" aria-label="Languages">
                        <a href="{{ $langLink('fr') }}" aria-label="Afficher le site en francais">Fr</a>
                        <a class="lang-toggle" href="{{ $langLink($isFr ? 'en' : 'fr') }}" role="switch" aria-checked="{{ $isFr ? 'false' : 'true' }}" aria-label="{{ $isFr ? 'Passer en anglais' : 'Switch to French' }}"></a>
                        <a href="{{ $langLink('en') }}" aria-label="Display site in English">En</a>
                    </span>
                </nav>
            </header>

            <div class="hero-carousel" data-hero-carousel data-interval="10000" aria-label="Magnum Multi Services highlights">
                <div class="hero-carousel-track">
                    @foreach ($heroSlides as $index => $slide)
                        <article class="hero-slide{{ $index === 0 ? ' is-active' : '' }}" data-hero-slide aria-hidden="{{ $index === 0 ? 'false' : 'true' }}">
                            <img src="{{ $slide['image'] }}" alt="" aria-hidden="true">
                            <div class="hero-slide-content">
                                <p class="home-eyebrow">{{ $slide['eyebrow'] }}</p>
                                <h1>{!! nl2br(e($slide['title'])) !!}</h1>
                                @isset($slide['subtitle'])
                                    <p class="hero-slide-subtitle">{{ $slide['subtitle'] }}</p>
                                @endisset
                                @foreach ((array) $slide['description'] as $description)
                                    <p class="hero-slide-description">{{ $description }}</p>
                                @endforeach
                                <div class="home-actions">
                                    <a class="home-btn home-btn-primary" href="{{ $slide['primary_url'] }}">{{ $slide['primary'] }}</a>
                                    <a class="home-btn home-btn-outline" href="{{ $slide['secondary_url'] }}">{{ $slide['secondary'] }}</a>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>

                <button class="hero-carousel-control hero-carousel-prev" type="button" data-hero-prev aria-label="Previous slide">
                    <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                </button>
                <button class="hero-carousel-control hero-carousel-next" type="button" data-hero-next aria-label="Next slide">
                    <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                </button>

                <div class="hero-carousel-dots" role="tablist" aria-label="Hero carousel slides">
                    @foreach ($heroSlides as $index => $slide)
                        <button class="{{ $index === 0 ? 'is-active' : '' }}" type="button" data-hero-dot="{{ $index }}" aria-label="Go to slide {{ $index + 1 }}" aria-selected="{{ $index === 0 ? 'true' : 'false' }}"></button>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="home-main">
            <div class="container home-container">
                <section class="home-about-row" id="home-about">
                    <div>
                        <p class="home-section-kicker">{{ $copy['home_about_eyebrow'] }}</p>
                        <h2>{{ $copy['home_about_title'] }}</h2>
                    </div>
                    <p>{{ $copy['home_about_text'] }}</p>
                </section>

                <section class="home-section">
                    <div class="home-section-heading">
                        <h2>{{ $copy['home_services_title'] }}</h2>
                        <p>{{ $copy['home_services_text'] }}</p>
                    </div>

                    <div class="home-services-grid">
                        @foreach ($copy['home_service_cards'] as $key => $service)
                            <a class="home-service-card" href="{{ $serviceLink($key) }}">
                                <span class="home-card-icon" aria-hidden="true"><i class="fa-solid {{ $serviceIcons[$key] }}"></i></span>
                                <h3>{{ $service['title'] }}</h3>
                                <p>{{ $service['text'] }}</p>
                            </a>
                        @endforeach
                    </div>
                </section>

                <section class="home-section home-industries-section" id="home-industries">
                    <div class="home-section-heading">
                        <h2>{{ $copy['home_industries_title'] }}</h2>
                        <p>{{ $copy['home_industries_text'] }}</p>
                    </div>

                    <div class="home-industries-carousel" data-industries-carousel data-interval="5000" aria-label="{{ $copy['home_industries_title'] }}">
                        <div class="home-industries-track">
                            @foreach ($industrySlides as $slideIndex => $industrySlide)
                                <div class="home-industries-slide {{ $slideIndex === 0 ? 'is-active' : '' }}" data-industries-slide aria-hidden="{{ $slideIndex === 0 ? 'false' : 'true' }}">
                                    @foreach ($industrySlide as $industryIndex => $industry)
                                        <article class="home-industry-card">
                                            <span class="home-industry-icon" aria-hidden="true">
                                                <i class="fa-solid {{ $industryIcons[$industryIndex] ?? 'fa-building' }}"></i>
                                            </span>
                                            <h3>{{ $industry }}</h3>
                                        </article>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                        <button class="home-industries-control home-industries-prev" type="button" data-industries-prev aria-label="{{ $copy['home_industries_previous'] }}">
                            <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                        </button>
                        <button class="home-industries-control home-industries-next" type="button" data-industries-next aria-label="{{ $copy['home_industries_next'] }}">
                            <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                        </button>

                        <div class="home-industries-dots" role="tablist" aria-label="{{ $copy['home_industries_title'] }}">
                            @foreach ($industrySlides as $slideIndex => $industrySlide)
                                <button class="{{ $slideIndex === 0 ? 'is-active' : '' }}" type="button" data-industries-dot="{{ $slideIndex }}" aria-label="{{ $copy['home_industries_slide_label'] }} {{ $slideIndex + 1 }}" aria-selected="{{ $slideIndex === 0 ? 'true' : 'false' }}"></button>
                            @endforeach
                        </div>
                    </div>
                </section>

                <section class="home-split-section">
                    <div class="home-why-block">
                        <h2>{{ $copy['home_why_title'] }}</h2>
                        @if (! empty($copy['home_why_text']))
                            <p>{{ $copy['home_why_text'] }}</p>
                        @endif
                        <ul>
                            @foreach ($copy['home_why_items'] as $index => $item)
                                <li>
                                    <span class="home-why-icon" aria-hidden="true">
                                        <i class="fa-solid {{ $whyIcons[$index] ?? 'fa-check' }}"></i>
                                    </span>
                                    <span>{{ $item }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="home-mission-stack">
                        <article>
                            <h3>{{ $copy['home_mission_title'] }}</h3>
                            <p>{{ $copy['home_mission_text'] }}</p>
                        </article>
                        <article>
                            <h3>{{ $copy['home_vision_title'] }}</h3>
                            <p>{{ $copy['home_vision_text'] }}</p>
                        </article>
                    </div>
                </section>

                <section class="home-values-section">
                    <h2>{{ $copy['home_values_title'] }}</h2>
                    <div class="home-values-list">
                        @foreach ($copy['home_values'] as $value)
                            <span>{{ $value }}</span>
                        @endforeach
                    </div>
                </section>

                <section class="home-contact-banner" aria-label="{{ $copy['home_contact_banner_label'] }}">
                    <h2>{{ $copy['home_contact_banner_title'] }}</h2>
                    @foreach ($copy['home_contact_banner_items'] as $index => $item)
                        <article>
                            <span aria-hidden="true"><i class="fa-solid {{ $contactBannerIcons[$index] ?? 'fa-check' }}"></i></span>
                            <h3>{{ $item }}</h3>
                        </article>
                    @endforeach
                </section>

                <section class="home-team-section">
                    <div>
                        <p class="home-section-kicker">Magnum Multi Services SARL</p>
                        <h2>{{ $copy['home_team_title'] }}</h2>
                    </div>
                    <p>{{ $copy['home_team_text'] }}</p>
                </section>

                <section class="home-cta">
                    <div>
                        <h2>{{ $copy['home_cta_title'] }}</h2>
                        <p>{{ $copy['home_cta_text'] }}</p>
                    </div>
                    <a class="home-btn home-btn-primary" href="#home-contact">{{ $copy['home_secondary_cta'] }}</a>
                </section>

                <section class="home-contact-section" id="home-contact">
                    <div class="home-contact-copy">
                        <h2 class="home-contact-title">{{ $copy['home_contact_title'] }}</h2>
                        <p class="home-contact-lead">{{ $copy['home_contact_text'] }}</p>
                        <ul class="home-contact-info">
                            <li>
                                <i class="fa-solid fa-phone" aria-hidden="true"></i>
                                <span>+243 990 347 544</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-envelope" aria-hidden="true"></i>
                                <span>info@magnum-msgroup.cd</span>
                            </li>
                            <li>
                                <i class="fa-solid fa-location-dot" aria-hidden="true"></i>
                                <span>{!! $copy['footer_address'] !!}</span>
                            </li>
                        </ul>

                        <nav class="home-contact-socials" aria-label="Social media">
                            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                        </nav>
                    </div>

                    <form class="home-contact-form" action="{{ route('contact.submit', ['lang' => $locale]) }}" method="post" novalidate data-contact-form data-sending-label="{{ $copy['form_sending'] }}" data-submit-label="{{ $copy['form_send'] }}">
                        @csrf

                        @if (session('contact_status'))
                            <div class="home-form-alert home-form-alert-success home-form-full" role="status" data-contact-alert>
                                {{ session('contact_status') }}
                            </div>
                        @else
                            <div class="home-form-alert home-form-full" role="status" hidden data-contact-alert></div>
                        @endif

                        @if ($errors->any())
                            <div class="home-form-alert home-form-alert-error home-form-full" role="alert" data-contact-error-summary>
                                {{ $copy['form_error'] }}
                            </div>
                        @else
                            <div class="home-form-alert home-form-alert-error home-form-full" role="alert" hidden data-contact-error-summary>
                                {{ $copy['form_error'] }}
                            </div>
                        @endif

                        <label>
                            <span>{{ $copy['form_full_name'] }} <b class="form-required" aria-hidden="true">*</b></span>
                            <input class="@error('full_name') is-invalid @enderror" type="text" name="full_name" value="{{ old('full_name') }}" aria-invalid="{{ $errors->has('full_name') ? 'true' : 'false' }}" @error('full_name') aria-describedby="full-name-error" @enderror>
                            @error('full_name')
                                <small id="full-name-error">{{ $message }}</small>
                            @enderror
                        </label>

                        <label>
                            <span>{{ $copy['form_email'] }} <b class="form-required" aria-hidden="true">*</b></span>
                            <input class="@error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" aria-invalid="{{ $errors->has('email') ? 'true' : 'false' }}" @error('email') aria-describedby="email-error" @enderror>
                            @error('email')
                                <small id="email-error">{{ $message }}</small>
                            @enderror
                        </label>

                        <label>
                            <span>{{ $copy['form_phone'] }}</span>
                            <input class="@error('phone') is-invalid @enderror" type="tel" name="phone" value="{{ old('phone') }}" aria-invalid="{{ $errors->has('phone') ? 'true' : 'false' }}" @error('phone') aria-describedby="phone-error" @enderror>
                            @error('phone')
                                <small id="phone-error">{{ $message }}</small>
                            @enderror
                        </label>

                        <label>
                            <span>{{ $copy['form_company'] }}</span>
                            <input class="@error('company') is-invalid @enderror" type="text" name="company" value="{{ old('company') }}" aria-invalid="{{ $errors->has('company') ? 'true' : 'false' }}" @error('company') aria-describedby="company-error" @enderror>
                            @error('company')
                                <small id="company-error">{{ $message }}</small>
                            @enderror
                        </label>

                        <label class="home-form-full">
                            <span>{{ $copy['form_service'] }} <b class="form-required" aria-hidden="true">*</b></span>
                            <select class="@error('requested_service') is-invalid @enderror" name="requested_service" aria-invalid="{{ $errors->has('requested_service') ? 'true' : 'false' }}" @error('requested_service') aria-describedby="requested-service-error" @enderror>
                                <option value="" @selected(! old('requested_service'))>{{ $copy['form_service'] }}</option>
                                @foreach ([$copy['supply_chain'], $copy['sourcing'], $copy['logistics'], $copy['oem'], $copy['trade'], $copy['consulting'], $copy['equipment'], $copy['operations']] as $serviceOption)
                                    <option value="{{ $serviceOption }}" @selected(old('requested_service') === $serviceOption)>{{ $serviceOption }}</option>
                                @endforeach
                            </select>
                            @error('requested_service')
                                <small id="requested-service-error">{{ $message }}</small>
                            @enderror
                        </label>

                        <label class="home-form-full">
                            <span>{{ $copy['form_message'] }} <b class="form-required" aria-hidden="true">*</b></span>
                            <textarea class="@error('message') is-invalid @enderror" name="message" rows="5" aria-invalid="{{ $errors->has('message') ? 'true' : 'false' }}" @error('message') aria-describedby="message-error" @enderror>{{ old('message') }}</textarea>
                            @error('message')
                                <small id="message-error">{{ $message }}</small>
                            @enderror
                        </label>

                        <button class="home-btn home-btn-primary home-form-submit" type="submit" data-contact-submit>{{ $copy['form_send'] }}</button>
                    </form>
                </section>
            </div>
        </section>

        <footer class="site-footer">
            <div class="footer-inner">
                <a class="footer-logo" href="{{ route('home', ['lang' => $locale]) }}">
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
                            <span>+243 990 347 544</span>
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
