@php
    $locale = $locale ?? 'en';
    $isFr = $locale === 'fr';
    $copy = trans('services');
    $langLink = fn (string $lang) => route('about', ['lang' => $lang]);
    $serviceLink = fn (string $target) => route('services', ['lang' => $locale, 'service' => $target]);
    $homeContactLink = route('home', ['lang' => $locale]) . '#home-contact';
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $copy['about_title'] }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}?v=20260715-8" rel="stylesheet">
    <script src="{{ asset('js/services.js') }}?v=20260715-3" defer></script>
</head>
<body id="top">
    <main class="page about-page">
        <section class="hero about-hero" style="--hero-image: url('/images/about-hero-team.png')">
            <header class="topbar d-flex align-items-start gap-4">
                <a class="brand flex-shrink-0" href="{{ route('home', ['lang' => $locale]) }}">
                    <img src="/images/logo-full-ntwb.png" alt="Magnum Multi Services SARL">
                </a>

                <button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" data-menu-toggle data-open-label="{{ $copy['mobile_menu'] }}" data-close-label="{{ $copy['mobile_menu_close'] }}" aria-label="{{ $copy['mobile_menu'] }}">
                    <i class="fa-solid fa-bars open-icon" aria-hidden="true"></i>
                    <i class="fa-solid fa-xmark close-icon" aria-hidden="true"></i>
                </button>
                @include('partials.main-nav', ['activePage' => 'about'])
            </header>

            <div class="hero-copy about-hero-copy">
                <h1>{{ $copy['about_hero_title'] }}</h1>
                <p>{{ $copy['about_hero_subtitle'] }}</p>
            </div>
        </section>

        <section class="about-main">
            <div class="container about-container">
                <section class="about-intro-section about-intro-card">
                    <div class="about-intro-copy">
                        <h2>{{ $copy['about_intro_title'] }}</h2>
                        <div class="about-intro-text">
                            @foreach ($copy['about_intro_text'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="about-intro-summary">
                        <div class="about-summary-line">
                            <span class="about-address-icon" aria-hidden="true"><i class="fa-solid fa-location-dot"></i></span>
                            <span>{{ $copy['about_intro_address'] }}</span>
                        </div>
                        <a class="home-btn home-btn-primary" href="{{ $homeContactLink }}">{{ $copy['about_intro_button'] }}</a>
                    </div>
                </section>

                <section class="about-section about-pillars-section" aria-label="{{ $copy['about_mvv_title'] }}">
                    <div class="about-mvv-grid">
                        <article class="about-feature-card">
                            <span class="about-card-icon" aria-hidden="true"><i class="fa-solid fa-bullseye"></i></span>
                            <h3>{{ $copy['about_mission_title'] }}</h3>
                            <p>{{ $copy['about_mission_text'] }}</p>
                        </article>
                        <article class="about-feature-card">
                            <span class="about-card-icon" aria-hidden="true"><i class="fa-solid fa-route"></i></span>
                            <h3>{{ $copy['about_vision_title'] }}</h3>
                            <p>{{ $copy['about_vision_text'] }}</p>
                        </article>
                        <article class="about-feature-card about-values-card">
                            <span class="about-card-icon" aria-hidden="true"><i class="fa-solid fa-gem"></i></span>
                            <h3>{{ $copy['about_values_title'] }}</h3>
                            <div class="about-values-list">
                                @foreach ($copy['about_values'] as $value)
                                    <span>{{ $value }}</span>
                                @endforeach
                            </div>
                        </article>
                    </div>
                </section>

                <section class="about-section">
                    <div class="about-section-heading">
                        <h2>{{ $copy['about_approach_title'] }}</h2>
                        <p>{{ $copy['about_approach_text'] }}</p>
                    </div>
                    <div class="about-approach-list">
                        @foreach ($copy['about_approach_cards'] as $card)
                            <article class="about-approach-item">
                                <span class="about-card-icon" aria-hidden="true"><i class="fa-solid {{ $card['icon'] }}"></i></span>
                                <div>
                                    <h3>{{ $card['title'] }}</h3>
                                    <p>{{ $card['text'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section class="about-team-section about-team-band">
                    <div class="about-team-visual" role="img" aria-label="Magnum Multi Services operations team"></div>
                    <div class="about-team-copy">
                        <h2>{{ $copy['about_team_title'] }}</h2>
                        <p>{{ $copy['about_team_text'] }}</p>
                        <p>{{ $copy['about_team_quote'] }}</p>
                    </div>
                </section>

                <section class="about-cta">
                    <div>
                        <h2>{{ $copy['about_cta_title'] }}</h2>
                        <p>{{ $copy['about_cta_text'] }}</p>
                    </div>
                    <div class="about-cta-actions">
                        <a class="home-btn home-btn-primary" href="{{ $homeContactLink }}">{{ $copy['about_cta_contact'] }}</a>
                        <a class="home-btn home-btn-outline" href="{{ route('services', ['lang' => $locale]) }}">{{ $copy['about_cta_services'] }}</a>
                    </div>
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
                    <p class="copyright">Copyright &copy; {{ date('Y') }} Magnum Multi-Services Sarl</p>
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
