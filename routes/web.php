<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\TemplatesController;
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

require __DIR__.'/auth.php';

Route::get('/resources', [ResourcesController::class, 'index'])->name('resources.index');
Route::get('/resources/create', [ResourcesController::class, 'create'])->name('resources.create');
Route::post('/resources', [ResourcesController::class, 'store'])->name('resources.store');
Route::put('/resources/{id}', [ResourcesController::class, 'update'])->name('resources.update');
Route::delete('/resources/{id}', [ResourcesController::class, 'destroy'])->name('resources.delete');



Route::get('/templates', [TemplatesController::class, 'index'])->name('templates.index');
Route::get('/templates/create', [TemplatesController::class, 'create'])->name('templates.create');
//Route::post('/templates/store', [TemplatesController::class, 'store'])->name('templates.store');
Route::post('/templates/upload', [TemplatesController::class, 'upload'])->name('templates.upload');
Route::put('/templates/{id}', [TemplatesController::class, 'update'])->name('templates.update');
Route::delete('/templates/{id}', [TemplatesController::class, 'destroy'])->name('templates.delete');

