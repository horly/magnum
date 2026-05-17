<aside class="cookie-consent" data-cookie-consent hidden aria-live="polite">
    <div class="cookie-consent-card" role="dialog" aria-modal="false" aria-labelledby="cookie-consent-title">
        <div class="cookie-consent-icon" aria-hidden="true">
            <i class="fa-solid fa-shield-halved"></i>
        </div>

        <div class="cookie-consent-content">
            <h2 id="cookie-consent-title">{{ $copy['cookie_title'] }}</h2>
            <p>{{ $copy['cookie_text'] }}</p>
            <p class="cookie-consent-note">
                {{ $copy['cookie_privacy_prefix'] }}
                <a href="{{ route('privacy-policy', ['lang' => $locale]) }}">{{ $copy['footer_privacy'] }}</a>.
            </p>
        </div>

        <div class="cookie-consent-actions" aria-label="{{ $copy['cookie_title'] }}">
            <button class="cookie-consent-accept" type="button" data-cookie-accept>{{ $copy['cookie_accept'] }}</button>
            <button class="cookie-consent-reject" type="button" data-cookie-reject>{{ $copy['cookie_reject'] }}</button>
        </div>
    </div>
</aside>
