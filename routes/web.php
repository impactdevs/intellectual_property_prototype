<?php

use App\Http\Controllers\IntellectualPropertyController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website_components.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('intellectual-properties', [IntellectualPropertyController::class, 'store'])->middleware('auth');
Route::get('intellectual-properties', [IntellectualPropertyController::class, 'index']);
Route::get('intellectual-properties/create', [IntellectualPropertyController::class, 'create']);

require __DIR__.'/auth.php';
