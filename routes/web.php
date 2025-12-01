<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Session;

// Main Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// Training Details Page (Separate Page)
Route::get('/trainings', [PageController::class, 'trainings'])->name('trainings');

// Dynamic Portfolio Details (e.g., /portfolio/factory-turnaround)
Route::get('/portfolio/{slug}', [PageController::class, 'portfolioDetail'])->name('portfolio.show');

// routes/web.php
Route::get('/services', [PageController::class, 'services'])->name('services');

// routes/web.php
Route::get('/education', [PageController::class, 'education'])->name('education');
Route::get('lang/{locale}', function ($locale) {
    // Validate the locale
    if (! in_array($locale, ['en', 'am'])) {
        abort(400);
    }

    // Save to session
    Session::put('locale', $locale);

    // Go back to the previous page
    return redirect()->back();
})->name('lang.switch');
