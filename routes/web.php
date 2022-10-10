<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;


// Route::middleware(['checkIp'])->group(function () {
    Route::group([
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','localize' ]
    ], function() {
        Route::get('/', [PageController::class, 'home'])->name('fe.home');
        Route::get(LaravelLocalization::transRoute('routes.about-us'), [PageController::class, 'aboutUs'])->name('fe.about-us');
        Route::get(LaravelLocalization::transRoute('routes.contact-us'), [PageController::class, 'contactUs'])->name('fe.contact-us');
        Route::post('contact-us', [PageController::class, 'contactUsPost'])->name('fe.contact-us.post');
        Route::get(LaravelLocalization::transRoute('routes.faqs'), [PageController::class, 'qa'])->name('fe.qa');
    });
// });

Route::get('redirect-locale/{locale}', [PageController::class, 'redirectLocale'])->name('fe.redirect-locale');


