<?php

use Illuminate\Support\Facades\Route;

$servicesPage = function () {
    $locale = request()->query('lang', session('locale', 'en'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'en';
    }

    $service = request()->query('service', 'sourcing');

    if (! in_array($service, ['supply', 'sourcing', 'logistics', 'oem', 'trade', 'consulting'], true)) {
        $service = 'sourcing';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('services', [
        'locale' => $locale,
        'service' => $service,
    ]);
};

Route::get('/', $servicesPage);

Route::get('/services', $servicesPage)->name('services');
