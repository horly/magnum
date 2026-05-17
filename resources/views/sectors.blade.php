@php
    $locale = $locale ?? 'en';
    $isFr = $locale === 'fr';
    $copy = trans('services');
    $langLink = fn (string $lang) => route('sectors', ['lang' => $lang]);
    $serviceLink = fn (string $target) => route('services', ['lang' => $locale, 'service' => $target]);
    $homeContactLink = route('home', ['lang' => $locale]) . '#home-contact';
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $copy['sectors_title'] }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/magnum-favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/services.css') }}?v=20260517-2" rel="stylesheet">
    <script src="{{ asset('js/services.js') }}?v=20260517-2" defer></script>
</head>
<body id="top">
    <main class="page sectors-page">
        <section class="hero sectors-hero" style="--hero-image: url('/images/home-carousel-3.png')">
            <header class="topbar d-flex align-items-start gap-4">
                <a class="brand flex-shrink-0" href="{{ route('home', ['lang' => $locale]) }}">
                    <img src="/images/logo-full-ntw.png" alt="Magnum Multi Services SARL">
                </a>

                <button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" data-menu-toggle data-open-label="{{ $copy['mobile_menu'] }}" data-close-label="{{ $copy['mobile_menu_close'] }}" aria-label="{{ $copy['mobile_menu'] }}">
                    <i class="fa-solid fa-bars open-icon" aria-hidden="true"></i>
                    <i class="fa-solid fa-xmark close-icon" aria-hidden="true"></i>
                </button>

                <nav class="main-nav" id="primary-navigation" aria-label="Primary navigation">
                    <a href="{{ route('home', ['lang' => $locale]) }}">{{ $copy['nav_home'] }}</a>
                    <a href="{{ route('about', ['lang' => $locale]) }}">{{ $copy['nav_about'] }}</a>
                    <a href="{{ route('services', ['lang' => $locale]) }}">{{ $copy['nav_services'] }}</a>
                    <a class="active" href="{{ route('sectors', ['lang' => $locale]) }}">{{ $copy['nav_industrial'] }}</a>
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

            <div class="hero-copy sectors-hero-copy">
                <h1>{{ $copy['sectors_hero_title'] }}</h1>
                <p>{{ $copy['sectors_hero_subtitle'] }}</p>
            </div>
        </section>

        <section class="sectors-main">
            <div class="container sectors-container">
                <section class="sectors-intro-section">
                    <div class="sectors-intro-copy">
                        <p class="home-section-kicker">{{ $copy['sectors_intro_kicker'] }}</p>
                        <h2>{{ $copy['sectors_intro_title'] }}</h2>
                        @foreach ($copy['sectors_intro_text'] as $paragraph)
                            <p>{{ $paragraph }}</p>
                        @endforeach
                        <a class="home-btn home-btn-primary" href="{{ $homeContactLink }}">{{ $copy['sectors_intro_button'] }}</a>
                    </div>
                    <div class="sectors-intro-image" role="img" aria-label="Industrial and logistics sectors supported by Magnum Multi Services"></div>
                </section>

                <section class="sectors-section">
                    <div class="sectors-section-heading">
                        <h2>{{ $copy['sectors_grid_title'] }}</h2>
                        <p>{{ $copy['sectors_grid_text'] }}</p>
                    </div>
                    <div class="sectors-card-grid">
                        @foreach ($copy['sectors_cards'] as $sector)
                            <article class="sectors-card">
                                <span class="sectors-card-icon" aria-hidden="true"><i class="fa-solid {{ $sector['icon'] }}"></i></span>
                                <h3>{{ $sector['title'] }}</h3>
                                <p>{{ $sector['text'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section class="sectors-section sectors-solutions-section">
                    <div class="sectors-section-heading">
                        <h2>{{ $copy['sectors_solutions_title'] }}</h2>
                        <div>
                            @foreach ($copy['sectors_solutions_text'] as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="sectors-solution-grid">
                        @foreach ($copy['sectors_solution_blocks'] as $solution)
                            <article class="sectors-solution-card">
                                <span aria-hidden="true"><i class="fa-solid {{ $solution['icon'] }}"></i></span>
                                <h3>{{ $solution['title'] }}</h3>
                                <p>{{ $solution['text'] }}</p>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section class="sectors-section sectors-choose-section">
                    <div class="sectors-section-heading compact">
                        <h2>{{ $copy['sectors_choose_title'] }}</h2>
                    </div>
                    <div class="sectors-choose-grid">
                        @foreach ($copy['sectors_choose_items'] as $item)
                            <article>
                                <i class="fa-solid fa-check" aria-hidden="true"></i>
                                <div>
                                    <h3>{{ $item['title'] }}</h3>
                                    <p>{{ $item['text'] }}</p>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </section>

                <section class="sectors-cta">
                    <div>
                        <h2>{{ $copy['sectors_cta_title'] }}</h2>
                        <p>{{ $copy['sectors_cta_text'] }}</p>
                    </div>
                    <div class="sectors-cta-actions">
                        <a class="home-btn home-btn-primary" href="{{ $homeContactLink }}">{{ $copy['sectors_cta_contact'] }}</a>
                        <a class="home-btn home-btn-outline" href="{{ route('services', ['lang' => $locale]) }}">{{ $copy['sectors_cta_services'] }}</a>
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
                            <span>+243 990 347 544</span>
                        </li>
                        <li>
                            <span class="icon" aria-hidden="true"><i class="fa-solid fa-envelope"></i></span>
                            <span>info.mms@magnum-ms.com</span>
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
