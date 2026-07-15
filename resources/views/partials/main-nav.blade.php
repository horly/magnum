@php
    $activePage = $activePage ?? '';
    $serviceItems = [
        'supply' => $copy['supply_chain'],
        'sourcing' => $copy['sourcing'],
        'logistics' => $copy['logistics'],
        'oem' => $copy['oem'],
        'trade' => $copy['trade'],
        'consulting' => $copy['consulting'],
        'equipment' => $copy['equipment'],
        'operations' => $copy['operations'],
    ];
@endphp

<nav class="main-nav" id="primary-navigation" aria-label="Primary navigation">
    <a class="{{ $activePage === 'home' ? 'active' : '' }}" href="{{ route('home', ['lang' => $locale]) }}">{{ $copy['nav_home'] }}</a>
    <a class="{{ $activePage === 'about' ? 'active' : '' }}" href="{{ route('about', ['lang' => $locale]) }}">{{ $copy['nav_about'] }}</a>

    <div class="nav-service-menu {{ $activePage === 'services' ? 'active' : '' }}" data-service-menu>
        <button type="button" class="nav-service-trigger {{ $activePage === 'services' ? 'active' : '' }}" data-service-trigger aria-expanded="false" aria-controls="primary-services-menu">
            <span>{{ $copy['nav_services'] }}</span>
            <i class="fa-solid fa-chevron-down" aria-hidden="true"></i>
        </button>
        <div class="nav-service-dropdown" id="primary-services-menu" data-service-dropdown>
            @foreach ($serviceItems as $key => $label)
                <a href="{{ $serviceLink($key) }}">
                    <span aria-hidden="true"></span>
                    {{ $label }}
                </a>
            @endforeach
        </div>
    </div>

    <a class="{{ $activePage === 'sectors' ? 'active' : '' }}" href="{{ route('sectors', ['lang' => $locale]) }}">{{ $copy['nav_industrial'] }}</a>
    <a class="{{ $activePage === 'schedules' ? 'active' : '' }}" href="{{ route('ssl-schedules', ['lang' => $locale]) }}">{{ $copy['nav_ssl'] }}</a>
    <a class="{{ $activePage === 'sites' ? 'active' : '' }}" href="{{ route('sites', ['lang' => $locale]) }}">{{ $copy['nav_locations'] }}</a>
    <a class="{{ $activePage === 'privacy' ? 'active' : '' }}" href="{{ route('privacy-policy', ['lang' => $locale]) }}">{{ $copy['footer_privacy'] }}</a>

    <span class="language-switch" aria-label="Languages">
        <a href="{{ $langLink('fr') }}" aria-label="Afficher le site en francais">Fr</a>
        <a class="lang-toggle" href="{{ $langLink($isFr ? 'en' : 'fr') }}" role="switch" aria-checked="{{ $isFr ? 'false' : 'true' }}" aria-label="{{ $isFr ? 'Passer en anglais' : 'Switch to French' }}"></a>
        <a href="{{ $langLink('en') }}" aria-label="Display site in English">En</a>
    </span>
</nav>