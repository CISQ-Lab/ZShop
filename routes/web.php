<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;

Route::get('/', [ViewsController::class, 'home'])->name('home');
Route::get('/company/{slug}', [ViewsController::class, 'presentation'])->name('presentation');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
