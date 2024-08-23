<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\CardController;
use App\Http\Controllers\DeckController;
use App\Http\Controllers\ProfileController;

// FIRST PAGE
Route::get('/', function () {
    return Inertia::render('App', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// INDEX
Route::get('/decks', [DeckController::class, 'index'])
        ->middleware(['auth', 'verified'])
        ->name('index');

// SHOW
Route::get('/cards', function() {
    return Inertia::render('Decks/Show');
})->name('show');

// ACCOUNT/PROFILE
Route::get('/account', function() {
    return Inertia::render('Profile/Edit');
})->name('profile');

// CREATE
    // DECK
    Route::get('/create-deck', [DeckController::class, 'createDeck']) 
            ->name('createDeck');

    Route::post('create-deck', [DeckController::class, 'storeDeck'])
            ->name('create.deck');

// DASHBOARD
// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');

// PROFILE/ACCOUNT EDITING
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
