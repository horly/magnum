<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;

$homePage = function () {
    $locale = request()->query('lang', session('locale', 'fr'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'fr';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('home', [
        'locale' => $locale,
    ]);
};

$servicesPage = function () {
    $locale = request()->query('lang', session('locale', 'fr'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'fr';
    }

    $service = request()->query('service', 'sourcing');

    if (! in_array($service, ['supply', 'sourcing', 'logistics', 'oem', 'trade', 'consulting', 'equipment', 'operations'], true)) {
        $service = 'sourcing';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('services', [
        'locale' => $locale,
        'service' => $service,
    ]);
};

$aboutPage = function () {
    $locale = request()->query('lang', session('locale', 'fr'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'fr';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('about', [
        'locale' => $locale,
    ]);
};

$sectorsPage = function () {
    $locale = request()->query('lang', session('locale', 'fr'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'fr';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('sectors', [
        'locale' => $locale,
    ]);
};

$schedulesPage = function () {
    $locale = request()->query('lang', session('locale', 'fr'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'fr';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('schedules', [
        'locale' => $locale,
    ]);
};

$sitesPage = function () {
    $locale = request()->query('lang', session('locale', 'fr'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'fr';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('sites', [
        'locale' => $locale,
    ]);
};

$privacyPage = function () {
    $locale = request()->query('lang', session('locale', 'fr'));

    if (! in_array($locale, ['en', 'fr'], true)) {
        $locale = 'fr';
    }

    session(['locale' => $locale]);
    app()->setLocale($locale);

    return view('privacy', [
        'locale' => $locale,
    ]);
};

Route::get('/', $homePage)->name('home');

Route::post('/contact', ContactFormController::class)->name('contact.submit');

Route::get('/about', $aboutPage)->name('about');

Route::get('/secteurs-activites', $sectorsPage)->name('sectors');

Route::get('/ssl-schedules', $schedulesPage)->name('ssl-schedules');

Route::get('/sites', $sitesPage)->name('sites');

Route::get('/privacy-policy', $privacyPage)->name('privacy-policy');

Route::get('/services', $servicesPage)->name('services');
