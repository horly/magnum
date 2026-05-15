@php
    $locale = $locale ?? 'en';
    $service = $service ?? 'sourcing';
    $isFr = $locale === 'fr';
    $isLogistics = $service === 'logistics';
    $isOem = $service === 'oem';
    $langLink = fn (string $lang) => request()->fullUrlWithQuery(['lang' => $lang, 'service' => $service]);
    $serviceLink = fn (string $target) => route('services', ['lang' => $locale, 'service' => $target]);
    $copy = [
        'en' => [
            'title' => 'Magnum Multi Services SARL - Sourcing Solutions',
            'nav_about' => 'About Us',
            'nav_services' => 'Services',
            'nav_industrial' => 'Industrial Verticals',
            'nav_ssl' => 'SSL Schedules',
            'nav_locations' => 'Locations',
            'nav_careers' => 'Careers',
            'hero_title' => 'Sourcing Solutions',
            'hero_subtitle' => 'Your Partner for Reliable, High-Quality Procurement',
            'sidebar_title' => 'Our services',
            'supply_chain' => 'Supply Chain Management Services',
            'sourcing' => 'Sourcing Solutions',
            'logistics' => 'Logistics Solutions',
            'oem' => 'OEM representation',
            'trade' => 'General Trade- B2B',
            'consulting' => 'Consulting and advisory services',
            'lead' => 'Magnum Multi service is your trusted ally for seamless, high-quality sourcing solutions. We are dedicated to delivering premium products, competitive pricing, and exceptional service to meet your unique needs. Through strong relationships with leading manufacturers and suppliers, we provide efficient, reliable sourcing solutions that empower your business to succeed.',
            'why' => "Why Choose Magnum's Sourcing Solutions?",
            'range_title' => '1. Comprehensive Product Range',
            'range_text' => 'Access a wide variety of raw materials and finished products, simplifying your procurement and consolidating your sourcing process.',
            'quality_title' => '2. Uncompromising Quality',
            'quality_text' => 'We implement rigorous quality controls to ensure every product meets the highest industry standards.',
            'supply_title' => '3. Consistent Supply',
            'supply_text' => 'Prevent production delays with our dependable supply chain, backed by strong supplier relationships and careful follow-up.',
            'contact_title' => 'Contact Us',
            'contact_text' => 'Let’s work together to deliver reliable, high-quality sourcing solutions tailored to your needs. .',
            'logistics_hero_title' => 'Logistics Solutions',
            'logistics_hero_subtitle' => 'Streamlining Operations, Expanding Market Reach',
            'logistics_lead_1' => 'At Magnum Multi-Services, we offer comprehensive logistics solutions designed to help brands, OEMs, and suppliers optimize their operations both locally and internationally. Our mission is to provide reliable, secure, and efficient logistics support that empowers businesses to expand their market reach, enhance working capital, and streamline supply chain operations.',
            'logistics_lead_2' => 'Whether you are looking to improve fulfillment accuracy, reduce delivery times, or manage inventory more effectively, we have the expertise and infrastructure to support your goals.',
            'infrastructure_title' => 'Our Infrastructure: Enabling Efficiency and Growth',
            'hub_title' => '1. State-of-the-Art Logistics Hub',
            'hub_text' => 'Our central logistics hub is the heart of our operations, ensuring efficient order processing, precise inventory management, and fast, accurate fulfillment. This hub is designed to deliver exceptional customer satisfaction by handling high volumes and ensuring seamless distribution.',
            'tech_title' => '2. Advanced Technological Integration',
            'tech_text' => 'We leverage cutting-edge technologies such as real-time inventory tracking, order management systems, and supply chain visibility tools. This enables us to provide data driven decision-making, optimize operations, and enhance overall supply chain performance.',
            'fleet_title' => '3. Diverse Fleet Capabilities',
            'fleet_text' => 'Our fleet, consisting of both owned and subcontracted vehicles, offers flexibility and reliability to meet various transportation needs.',
            'logistics_contact_text' => 'today to learn how we can support your logistics needs and help you streamline your operations.',
            'oem_hero_title' => 'OEM representation',
            'oem_hero_subtitle' => 'Your Trusted Partner for Stock Availability, Competitive Pricing, and Seamless Support',
            'oem_intro_1' => 'Magnum Multi Services offers OEM Representation to help businesses streamline procurement and expand their product offerings. Our service ensures that buyers and distributors benefit from guaranteed stock availability, competitive pricing, and flexible payment options—all backed by reliable logistics management and comprehensive aftersales support.',
            'oem_intro_2' => 'With Magnum as your OEM partner, you can focus on growing your business while we handle the complexities of supply and support, ensuring long-term success and customer satisfaction.',
            'oem_services_title' => 'Our OEM Representation Services:',
            'stock_title' => '1. Guaranteed Stock Availability',
            'stock_text' => 'Magnum’s strong partnerships with manufacturers ensure consistent stock availability. This means no more stockouts—just reliable, uninterrupted supply to keep your operations running smoothly.',
            'pricing_title' => '2. Competitive Pricing',
            'pricing_text' => 'We negotiate favorable pricing with manufacturers, allowing our direct buyers to secure cost-effective solutions. This helps you improve profit margins while maintaining the quality your customers expect.',
            'get_in_touch' => 'Get in Touch',
            'oem_contact_text' => 'Magnum Multi Services—your trusted OEM partner for seamless procurement, competitive pricing, and comprehensive support. Let’s work together to grow your business.',
            'footer_contact' => 'Contact Us',
            'footer_address' => 'Concession COTEX (Silikin Village)<br>N° 63, Ave Colonel Mondjiba, Kinshasa',
            'footer_quick' => 'Quick Navigation',
            'footer_privacy' => 'Privacy Policy',
            'footer_services' => 'Services',
            'footer_copyright' => 'Magnum Multi-Services Sarl',
            'back_to_top' => 'Back to top',
        ],
        'fr' => [
            'title' => 'Magnum Multi Services SARL - Solutions de sourcing',
            'nav_about' => 'À propos',
            'nav_services' => 'Services',
            'nav_industrial' => 'Secteurs industriels',
            'nav_ssl' => 'Horaires SSL',
            'nav_locations' => 'Sites',
            'nav_careers' => 'Carrières',
            'hero_title' => 'Solutions de sourcing',
            'hero_subtitle' => 'Votre partenaire pour des achats fiables et de haute qualité',
            'sidebar_title' => 'Nos services',
            'supply_chain' => "Services de gestion de la chaîne d'approvisionnement",
            'sourcing' => 'Solutions de sourcing',
            'logistics' => 'Solutions logistiques',
            'oem' => 'Représentation OEM',
            'trade' => 'Commerce général- B2B',
            'consulting' => "Services de conseil et d'accompagnement",
            'lead' => 'Magnum Multi service est votre partenaire de confiance pour des solutions de sourcing fluides et de haute qualité. Nous nous engageons à fournir des produits premium, des prix compétitifs et un service exceptionnel adapté à vos besoins. Grâce à des relations solides avec les principaux fabricants et fournisseurs, nous offrons des solutions fiables et efficaces qui aident votre entreprise à réussir.',
            'why' => 'Pourquoi choisir les solutions de sourcing Magnum ?',
            'range_title' => '1. Large gamme de produits',
            'range_text' => 'Accédez à une grande variété de matières premières et de produits finis, tout en simplifiant vos achats et en consolidant votre processus de sourcing.',
            'quality_title' => '2. Qualité sans compromis',
            'quality_text' => 'Nous appliquons des contrôles qualité rigoureux afin de garantir que chaque produit respecte les normes les plus élevées du secteur.',
            'supply_title' => '3. Approvisionnement constant',
            'supply_text' => "Évitez les retards de production grâce à notre chaîne d'approvisionnement fiable, soutenue par des relations fournisseurs solides et un suivi attentif.",
            'contact_title' => 'Contactez-nous',
            'contact_text' => 'Travaillons ensemble pour fournir des solutions de sourcing fiables et de haute qualité, adaptées à vos besoins. .',
            'logistics_hero_title' => 'Solutions logistiques',
            'logistics_hero_subtitle' => 'Rationaliser les opérations, étendre la portée du marché',
            'logistics_lead_1' => 'Chez Magnum Multi-Services, nous proposons des solutions logistiques complètes conçues pour aider les marques, les OEM et les fournisseurs à optimiser leurs opérations localement et à l’international. Notre mission est de fournir un soutien logistique fiable, sécurisé et efficace qui permet aux entreprises d’étendre leur portée commerciale, d’améliorer leur fonds de roulement et de rationaliser leurs opérations de chaîne d’approvisionnement.',
            'logistics_lead_2' => 'Que vous cherchiez à améliorer la précision de vos livraisons, réduire les délais ou gérer vos stocks plus efficacement, nous disposons de l’expertise et de l’infrastructure nécessaires pour accompagner vos objectifs.',
            'infrastructure_title' => 'Notre infrastructure : efficacité et croissance',
            'hub_title' => '1. Hub logistique de pointe',
            'hub_text' => 'Notre hub logistique central est au cœur de nos opérations. Il garantit un traitement efficace des commandes, une gestion précise des stocks et une exécution rapide et fiable. Ce hub est conçu pour assurer une satisfaction client élevée en traitant de grands volumes et en garantissant une distribution fluide.',
            'tech_title' => '2. Intégration technologique avancée',
            'tech_text' => 'Nous utilisons des technologies avancées telles que le suivi des stocks en temps réel, les systèmes de gestion des commandes et les outils de visibilité de la chaîne d’approvisionnement. Cela nous permet d’appuyer la prise de décision, d’optimiser les opérations et d’améliorer la performance globale de la chaîne d’approvisionnement.',
            'fleet_title' => '3. Capacités de flotte diversifiées',
            'fleet_text' => 'Notre flotte, composée de véhicules propres et sous-traités, offre flexibilité et fiabilité pour répondre à différents besoins de transport.',
            'logistics_contact_text' => 'dès aujourd’hui pour découvrir comment nous pouvons soutenir vos besoins logistiques et rationaliser vos opérations.',
            'oem_hero_title' => 'Représentation OEM',
            'oem_hero_subtitle' => 'Votre partenaire de confiance pour la disponibilité des stocks, des prix compétitifs et un support fluide',
            'oem_intro_1' => 'Magnum Multi Services propose la représentation OEM afin d’aider les entreprises à simplifier leurs achats et à élargir leur offre de produits. Notre service garantit aux acheteurs et distributeurs une disponibilité des stocks, des prix compétitifs et des options de paiement flexibles, le tout soutenu par une gestion logistique fiable et un service après-vente complet.',
            'oem_intro_2' => 'Avec Magnum comme partenaire OEM, vous pouvez vous concentrer sur la croissance de votre entreprise pendant que nous gérons les complexités de l’approvisionnement et du support, afin d’assurer une réussite durable et la satisfaction de vos clients.',
            'oem_services_title' => 'Nos services de représentation OEM :',
            'stock_title' => '1. Disponibilité garantie des stocks',
            'stock_text' => 'Les solides partenariats de Magnum avec les fabricants garantissent une disponibilité régulière des stocks. Cela signifie moins de ruptures, et un approvisionnement fiable et continu pour maintenir vos opérations.',
            'pricing_title' => '2. Prix compétitifs',
            'pricing_text' => 'Nous négocions des prix avantageux avec les fabricants, permettant à nos acheteurs directs d’obtenir des solutions rentables. Cela vous aide à améliorer vos marges tout en maintenant la qualité attendue par vos clients.',
            'get_in_touch' => 'Contactez-nous',
            'oem_contact_text' => 'Magnum Multi Services, votre partenaire OEM de confiance pour des achats fluides, des prix compétitifs et un accompagnement complet. Travaillons ensemble pour développer votre entreprise.',
            'footer_contact' => 'Contactez-nous',
            'footer_address' => 'Concession COTEX (Silikin Village)<br>N° 63, Ave Colonel Mondjiba, Kinshasa',
            'footer_quick' => 'Navigation rapide',
            'footer_privacy' => 'Politique de confidentialité',
            'footer_services' => 'Services',
            'footer_copyright' => 'Magnum Multi-Services Sarl',
            'back_to_top' => 'Retour en haut',
        ],
    ][$locale];

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

    $heroImage = '/images/services-hero.jpg';

    if ($isLogistics) {
        $heroImage = '/images/services-office.jpg';
    }

    if ($isOem) {
        $heroImage = '/images/services-oem.jpg';
    }
@endphp
<!DOCTYPE html>
<html lang="{{ $locale }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $copy['title'] }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --blue: #06186b;
            --rose: #ec0044;
            --ink: #111828;
            --soft-panel: #d9ddeb;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: var(--ink);
            background: #fff;
            font-family: "Quicksand", "Segoe UI", Arial, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container-fluid {
            width: 100%;
            margin-right: auto;
            margin-left: auto;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .g-0 {
            --bs-gutter-x: 0;
            --bs-gutter-y: 0;
        }

        .col-lg {
            flex: 1 0 0%;
        }

        .col-lg-auto {
            flex: 0 0 auto;
            width: auto;
        }

        .d-flex {
            display: flex;
        }

        .align-items-start {
            align-items: flex-start;
        }

        .flex-grow-1 {
            flex-grow: 1;
        }

        .flex-shrink-0 {
            flex-shrink: 0;
        }

        .gap-4 {
            gap: 1.5rem;
        }

        .mb-4 {
            margin-bottom: 1.5rem;
        }

        .page {
            width: 100%;
            min-height: 100vh;
            overflow-x: hidden;
            background: #fff;
            animation: pageReveal .45s ease both;
        }

        @keyframes pageReveal {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        body.is-leaving .page {
            animation: pageLeave .22s ease both;
        }

        @keyframes pageLeave {
            to {
                opacity: 0;
                transform: translateY(8px);
            }
        }

        .hero {
            position: relative;
            min-height: 425px;
            color: #fff;
            background-image:
                linear-gradient(90deg, rgba(6, 15, 48, .72), rgba(6, 15, 48, .48)),
                var(--hero-image);
            background-position: center 47%;
            background-size: cover;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(30, 34, 62, .18);
        }

        .topbar {
            position: relative;
            z-index: 2;
            min-height: 80px;
            padding: 20px 38px 0 39px;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            width: 165px;
            min-height: 58px;
        }

        .brand img {
            display: block;
            width: 100%;
            height: auto;
        }

        .main-nav {
            position: relative;
            display: flex;
            align-items: center;
            gap: 29px;
            min-width: 0;
            margin: 0 auto;
            padding-top: 18px;
            color: #fff;
            font-size: 15px;
            font-weight: 900;
            line-height: 1;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .main-nav::after {
            content: "";
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            height: 1px;
            background: var(--rose);
        }

        .main-nav a {
            position: relative;
            display: inline-flex;
            min-height: 40px;
            align-items: center;
        }

        .main-nav a.active::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            height: 5px;
            background: var(--rose);
            z-index: 1;
        }

        .language-switch {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            position: absolute;
            top: -10px;
            right: 0;
            color: #fff;
            font-size: 16px;
            font-weight: 900;
            line-height: 1;
            text-transform: none;
            z-index: 3;
        }

        .language-switch a {
            display: inline-flex;
            align-items: center;
        }

        .lang-toggle {
            position: relative;
            display: inline-flex;
            flex: 0 0 22px !important;
            width: 22px !important;
            min-width: 22px !important;
            max-width: 22px !important;
            height: 12px !important;
            min-height: 12px !important;
            max-height: 12px !important;
            margin: 0 1px;
            padding: 0 !important;
            border-radius: 999px;
            border: 2px solid #fff;
            background: transparent;
            box-shadow: 0 0 0 1px rgba(6, 15, 48, .08);
            cursor: pointer;
            overflow: hidden;
        }

        .lang-toggle::after {
            content: "";
            position: absolute;
            top: 50%;
            left: 2px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #fff;
            transform: translateY(-50%);
            transition: left .18s ease;
        }

        .lang-toggle[aria-checked="true"]::after {
            left: 10px;
        }

        .lang-toggle:focus-visible {
            outline: 2px solid rgba(255, 255, 255, .9);
            outline-offset: 3px;
        }

        .hero-copy {
            position: relative;
            z-index: 2;
            padding: 170px 0 0 54px;
            animation: contentRise .55s ease .08s both;
        }

        .service-content {
            animation: contentRise .55s ease .16s both;
        }

        .site-footer {
            animation: contentRise .55s ease .24s both;
        }

        @keyframes contentRise {
            from {
                opacity: 0;
                transform: translateY(18px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-copy h1 {
            margin: 0 0 9px;
            color: #fff;
            font-size: clamp(40px, 5vw, 48px);
            font-weight: 900;
            letter-spacing: 0;
            line-height: .95;
            text-transform: uppercase;
        }

        .hero-copy p {
            width: min(100%, 790px);
            margin: 0;
            color: #fff;
            font-size: 21px;
            font-weight: 500;
            line-height: 1.2;
        }

        .service-section {
            position: relative;
            max-width: 1154px;
            margin: 39px auto 0;
            padding: 0 0 24px;
        }

        .service-section::before {
            content: "";
            position: absolute;
            inset: 0 0 0 0;
            width: 100%;
            height: 100%;
            opacity: .5;
            background: url("/images/world-map-real.svg") center 34px / 92% auto no-repeat;
            pointer-events: none;
        }

        .services-sidebar {
            width: 253px;
            padding: 0 21px 25px;
            background: var(--soft-panel);
        }

        .services-sidebar h2 {
            display: flex;
            width: 100%;
            min-height: 38px;
            align-items: center;
            justify-content: center;
            margin: 0 0 5px;
            color: var(--blue);
            font-size: 25px;
            font-weight: 900;
            text-align: center;
        }

        .service-link {
            display: flex;
            min-height: 49px;
            align-items: center;
            padding: 9px 24px;
            border-bottom: 1px solid #c8cedd;
            background: #fff;
            color: #061050;
            font-size: 12px;
            font-weight: 900;
            line-height: 1.1;
        }

        .service-link.active {
            min-height: 49px;
            color: #061050;
            background: var(--rose);
        }

        .service-content {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 253px 1fr;
            column-gap: 26px;
            align-items: start;
        }

        .content-column {
            position: relative;
            min-height: 675px;
        }

        .section-title {
            margin: 0;
            color: var(--blue);
            font-size: 31px;
            font-weight: 900;
            line-height: 1;
        }

        .section-kicker {
            margin: 2px 0 24px;
            color: var(--blue);
            font-size: 14px;
            font-weight: 900;
            line-height: 1.15;
        }

        .lead-copy {
            max-width: 850px;
            margin: 0 0 28px;
            font-size: 20px;
            font-weight: 400;
            line-height: 1.23;
        }

        .content-column .lead-copy {
            max-width: 850px;
        }

        .content-column h3 {
            margin: 0 0 19px;
            color: #222;
            font-size: 20px;
            font-weight: 500;
        }

        .content-column h4 {
            margin: 0 0 20px;
            color: #262626;
            font-size: 20px;
            font-weight: 900;
            line-height: 1.15;
        }

        .content-column .point-copy {
            margin: 0 0 21px;
            max-width: 468px;
            color: #222;
            font-size: 22px;
            line-height: 1.05;
        }

        .consulting-photo {
            position: absolute;
            right: 0;
            top: 257px;
            width: 312px;
            height: 385px;
            background: url("/images/services-consulting.jpg") center / cover no-repeat;
        }

        .contact-block {
            margin-top: 42px;
        }

        .contact-block h3 {
            margin: 0 0 24px;
            color: var(--blue);
            font-size: 22px;
            font-weight: 900;
        }

        .contact-block p {
            max-width: none;
            margin: 0;
            font-size: 21px;
            line-height: 1.3;
        }

        .logistics-layout {
            position: relative;
            min-height: 680px;
            padding-bottom: 24px;
        }

        .logistics-layout .lead-copy {
            max-width: 850px;
            margin-bottom: 24px;
        }

        .logistics-divider {
            height: 1px;
            margin: 75px 0 13px -278px;
            background: rgba(17, 24, 40, .35);
        }

        .infrastructure-title {
            margin: 0 0 20px -278px;
            color: var(--blue);
            font-size: 19px;
            font-weight: 900;
        }

        .logistics-points {
            max-width: 720px;
            margin-left: -278px;
        }

        .logistics-points h4 {
            margin-bottom: 14px;
        }

        .logistics-points p {
            max-width: 710px;
            font-size: 18px;
            line-height: 1.05;
        }

        .logistics-photo {
            position: absolute;
            right: 0;
            bottom: 38px;
            width: 321px;
            height: 346px;
            background: url("/images/services-office.jpg") center / cover no-repeat;
        }

        .logistics-contact {
            margin: 11px 0 0 -278px;
            max-width: 700px;
            font-size: 13px;
            line-height: 1.25;
        }

        .logistics-contact strong {
            color: var(--blue);
            font-weight: 900;
        }

        .oem-layout {
            min-height: 705px;
        }

        .oem-layout .lead-copy {
            max-width: 850px;
            margin-bottom: 24px;
        }

        .oem-services-title {
            margin: 39px 0 20px;
            color: var(--blue);
            font-size: 18px;
            font-weight: 900;
        }

        .oem-layout .point-copy {
            max-width: 760px;
            font-size: 21px;
            line-height: 1.08;
        }

        .oem-contact {
            margin: 80px 0 0 -278px;
        }

        .oem-contact h3 {
            margin: 0 0 4px;
            color: var(--blue);
            font-size: 21px;
            font-weight: 900;
        }

        .oem-contact p {
            max-width: 1045px;
            margin: 0;
            font-size: 20px;
            line-height: 1.2;
        }

        .site-footer {
            position: relative;
            margin-top: 31px;
            overflow: hidden;
            color: #fff;
            background: #121f74;
        }

        .site-footer::before,
        .site-footer::after {
            content: "";
            position: absolute;
            border-radius: 6px;
            background: rgba(255, 255, 255, .055);
            pointer-events: none;
        }

        .site-footer::before {
            right: 18px;
            top: 12px;
            width: 176px;
            height: 174px;
            transform: rotate(-5deg);
        }

        .site-footer::after {
            right: 172px;
            top: 205px;
            width: 148px;
            height: 148px;
            transform: rotate(-20deg);
        }

        .footer-inner {
            position: relative;
            z-index: 1;
            display: grid;
            grid-template-columns: 145px 290px 205px 340px 90px;
            gap: 38px;
            align-items: start;
            max-width: 1096px;
            min-height: 289px;
            margin: 0 auto;
            padding: 28px 0 28px;
        }

        .footer-logo img {
            display: block;
            width: 93px;
            height: auto;
        }

        .footer-column h2 {
            margin: 54px 0 12px;
            color: #ffb000;
            font-size: 14px;
            font-weight: 900;
            text-transform: uppercase;
        }

        .footer-contact-list,
        .footer-links {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .footer-contact-list li {
            display: grid;
            grid-template-columns: 18px 1fr;
            column-gap: 11px;
            align-items: start;
            margin-bottom: 28px;
            font-size: 12px;
            font-weight: 700;
            line-height: 1.25;
        }

        .footer-contact-list .icon {
            color: var(--rose);
            font-size: 16px;
            line-height: 1;
        }

        .footer-links li {
            margin-bottom: 13px;
            font-size: 12px;
            font-weight: 800;
            line-height: 1;
        }

        .footer-links a::before,
        .footer-links span::before {
            content: "• ";
            color: #fff;
        }

        .back-to-top {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 68px;
            height: 68px;
            margin-top: 92px;
            border-radius: 50%;
            color: #fff;
            background: var(--rose);
            font-size: 38px;
            font-weight: 900;
            line-height: 1;
        }

        .back-to-top i {
            transform: translateY(-1px);
        }

        .footer-bottom {
            position: relative;
            z-index: 1;
            border-top: 2px solid var(--rose);
        }

        .footer-bottom-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            max-width: 1096px;
            min-height: 68px;
            margin: 0 auto;
            gap: 24px;
        }

        .copyright {
            margin: 0;
            font-size: 13px;
            font-weight: 800;
        }

        .social-links {
            display: flex;
            gap: 8px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 25px;
            height: 25px;
            border: 2px solid #fff;
            border-radius: 4px;
            color: #fff;
            font-size: 13px;
            font-weight: 900;
            line-height: 1;
        }

        .footer-ghost-card {
            position: absolute;
            right: 10px;
            bottom: 15px;
            width: 115px;
            height: 130px;
            border-radius: 6px;
            background: rgba(255, 255, 255, .055);
            transform: rotate(8deg);
            pointer-events: none;
        }

        @media (max-width: 1199px) {
            .topbar {
                padding-right: 24px;
                padding-left: 28px;
            }

            .brand {
                width: 138px;
            }

            .main-nav {
                gap: 17px;
                font-size: 13px;
            }

            .language-switch {
                font-size: 14px;
            }

            .service-section {
                max-width: calc(100% - 42px);
            }

            .consulting-photo {
                width: 250px;
                height: 309px;
            }

            .footer-inner,
            .footer-bottom-inner {
                max-width: calc(100% - 80px);
            }

            .footer-inner {
                grid-template-columns: 130px 1.4fr 1fr 1.35fr 80px;
                gap: 26px;
            }

            .logistics-divider,
            .infrastructure-title,
            .logistics-points,
            .logistics-contact {
                margin-left: 0;
            }

            .logistics-points {
                max-width: calc(100% - 280px);
            }

            .logistics-photo {
                width: 250px;
                height: 270px;
            }

            .oem-contact {
                margin-left: 0;
            }
        }

        @media (min-width: 768px) {
            .mb-lg-0 {
                margin-bottom: 0;
            }
        }

        @media (max-width: 767px) {
            .row {
                display: block;
            }

            .service-content,
            .col-lg,
            .col-lg-auto {
                width: 100%;
            }

            .service-content {
                display: block;
            }

            .main-nav {
                flex-wrap: wrap;
                padding-top: 8px;
                white-space: normal;
            }

            .main-nav a {
                min-height: 32px;
            }

            .hero-copy {
                padding: 120px 24px 42px;
            }

            .services-sidebar {
                width: 100%;
            }

            .content-column {
                max-width: none;
                padding-left: 0;
                min-height: 0;
            }

            .consulting-photo {
                position: static;
                width: 100%;
                height: 320px;
                margin: 24px 0 0;
            }

            .footer-inner {
                grid-template-columns: 1fr;
                max-width: calc(100% - 48px);
                gap: 4px;
                padding: 34px 0;
            }

            .footer-column h2,
            .back-to-top {
                margin-top: 20px;
            }

            .footer-bottom-inner {
                max-width: calc(100% - 48px);
                flex-direction: column;
                align-items: flex-start;
                padding: 18px 0;
            }

            .logistics-layout {
                min-height: 0;
            }

            .logistics-divider,
            .infrastructure-title,
            .logistics-points,
            .logistics-contact {
                margin-left: 0;
            }

            .logistics-points {
                max-width: none;
            }

            .logistics-photo {
                position: static;
                width: 100%;
                height: 320px;
                margin-top: 24px;
            }

            .oem-layout {
                min-height: 0;
            }

            .oem-contact {
                margin: 40px 0 0;
            }
        }

        @media (max-width: 575px) {
            .topbar {
                padding-left: 18px;
            }

            .brand {
                width: 128px;
            }

            .hero-copy h1 {
                font-size: 36px;
            }

            .hero-copy p,
            .lead-copy,
            .content-column p {
                font-size: 15px;
            }

            .service-section {
                padding-left: 14px;
                padding-right: 14px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                animation-iteration-count: 1 !important;
                scroll-behavior: auto !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const animatedLinks = document.querySelectorAll('a[href]:not([href^="#"]):not([target])');

            animatedLinks.forEach((link) => {
                link.addEventListener('click', (event) => {
                    const url = new URL(link.href, window.location.href);

                    if (url.origin !== window.location.origin || url.href === window.location.href) {
                        return;
                    }

                    event.preventDefault();
                    document.body.classList.add('is-leaving');
                    window.setTimeout(() => {
                        window.location.href = url.href;
                    }, 180);
                });
            });
        });
    </script>
</head>
<body id="top">
    <main class="page">
        <section class="hero" style="--hero-image: url('{{ $heroImage }}')">
            <header class="topbar d-flex align-items-start gap-4">
                <a class="brand flex-shrink-0" href="/">
                    <img src="/images/logo-full-w.png" alt="Magnum Multi Services SARL">
                </a>

                <nav class="main-nav" aria-label="Primary navigation">
                    <a href="#">{{ $copy['nav_about'] }}</a>
                    <a class="active" href="{{ route('services', ['lang' => $locale]) }}">{{ $copy['nav_services'] }}</a>
                    <a href="#">{{ $copy['nav_industrial'] }}</a>
                    <a href="#">{{ $copy['nav_ssl'] }}</a>
                    <a href="#">{{ $copy['nav_locations'] }}</a>
                    <a href="#">{{ $copy['nav_careers'] }}</a>

                    <span class="language-switch" aria-label="Languages">
                        <a href="{{ $langLink('fr') }}" aria-label="Afficher le site en francais">Fr</a>
                        <a class="lang-toggle" href="{{ $langLink($isFr ? 'en' : 'fr') }}" role="switch" aria-checked="{{ $isFr ? 'false' : 'true' }}" aria-label="{{ $isFr ? 'Passer en anglais' : 'Switch to French' }}"></a>
                        <a href="{{ $langLink('en') }}" aria-label="Display site in English">En</a>
                    </span>
                </nav>
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
                        <a class="service-link" href="#">{{ $copy['supply_chain'] }}</a>
                        <a class="service-link {{ $service === 'sourcing' ? 'active' : '' }}" href="{{ $serviceLink('sourcing') }}">{{ $copy['sourcing'] }}</a>
                        <a class="service-link {{ $service === 'logistics' ? 'active' : '' }}" href="{{ $serviceLink('logistics') }}">{{ $copy['logistics'] }}</a>
                        <a class="service-link {{ $service === 'oem' ? 'active' : '' }}" href="{{ $serviceLink('oem') }}">{{ $copy['oem'] }}</a>
                        <a class="service-link" href="#">{{ $copy['trade'] }}</a>
                        <a class="service-link" href="#">{{ $copy['consulting'] }}</a>
                    </div>
                </aside>

                @if ($isLogistics)
                    <article class="content-column logistics-layout">
                        <h2 class="section-title">{{ $copy['logistics'] }}</h2>
                        <p class="section-kicker">{{ $copy['logistics_hero_subtitle'] }}</p>

                        <p class="lead-copy">{{ $copy['logistics_lead_1'] }}</p>
                        <p class="lead-copy">{{ $copy['logistics_lead_2'] }}</p>

                        <div class="logistics-divider" aria-hidden="true"></div>
                        <h3 class="infrastructure-title">{{ $copy['infrastructure_title'] }}</h3>

                        <div class="logistics-points">
                            <h4>{{ $copy['hub_title'] }}</h4>
                            <p>{{ $copy['hub_text'] }}</p>

                            <h4>{{ $copy['tech_title'] }}</h4>
                            <p>{{ $copy['tech_text'] }}</p>

                            <h4>{{ $copy['fleet_title'] }}</h4>
                            <p>{{ $copy['fleet_text'] }}</p>
                        </div>

                        <div class="logistics-photo" aria-label="Logistics solutions visual"></div>
                        <p class="logistics-contact"><strong>{{ $copy['contact_title'] }}</strong> {{ $copy['logistics_contact_text'] }}</p>
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
                        <li><a href="#">{{ $copy['nav_about'] }}</a></li>
                        <li><a href="{{ route('services', ['lang' => $locale]) }}">Services</a></li>
                        <li><a href="#">{{ $copy['nav_industrial'] }}</a></li>
                        <li><a href="#">{{ $copy['footer_privacy'] }}</a></li>
                        <li><a href="#">{{ $copy['nav_locations'] }}</a></li>
                        <li><a href="#">{{ $copy['nav_careers'] }}</a></li>
                    </ul>
                </nav>

                <section class="footer-column" aria-labelledby="footer-services">
                    <h2 id="footer-services">{{ $copy['footer_services'] }}</h2>
                    <ul class="footer-links">
                        <li><span>{{ $copy['supply_chain'] }}</span></li>
                        <li><span>{{ $copy['sourcing'] }}</span></li>
                        <li><span>{{ $copy['logistics'] }}</span></li>
                        <li><span>{{ $copy['oem'] }}</span></li>
                        <li><span>{{ $copy['trade'] }}</span></li>
                        <li><span>{{ $copy['consulting'] }}</span></li>
                    </ul>
                </section>

                <a class="back-to-top" href="#top" aria-label="{{ $copy['back_to_top'] }}"><i class="fa-solid fa-arrow-up"></i></a>
            </div>

            <div class="footer-bottom">
                <div class="footer-bottom-inner">
                    <p class="copyright">Copyright © {{ now()->year }} {{ $copy['footer_copyright'] }}</p>
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
    </main>
</body>
</html>
