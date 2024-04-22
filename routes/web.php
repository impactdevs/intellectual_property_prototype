<?php

use App\Http\Controllers\IntellectualPropertyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResourcesController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TemplatesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website_components.index');
});

//persmission controllr routes

Route::resource('permissions', App\Http\Controllers\PermissionController::class);
Route::get('permissions/{permissionId}/delete', [PermissionController::class, 'destroy']);


Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::get('roles/{roleId}/delete', [RoleController::class, 'destroy']);
Route::get('roles/{roleId}/give-permissions', [RoleController::class, 'givePermissionsToRole']);
Route::put('roles/{roleId}/give-permissions', [RoleController::class, 'updatePermissionsToRole']);

Route::resource('users', App\Http\Controllers\UserController::class);
Route::put('users/{userId}', [UserController::class, 'update']);
Route::get('users/{userId}/delete', [UserController::class, 'destroy']);




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('intellectual-properties', [IntellectualPropertyController::class, 'store'])->middleware('auth');
Route::get('intellectual-properties', [IntellectualPropertyController::class, 'index'])
    ->name('intellectual-properties')
    ->middleware('auth');

Route::get('intellectual-properties/create', [IntellectualPropertyController::class, 'create'])->middleware('auth');
Route::get('intellectual-properties/{intellectualProperty}', [IntellectualPropertyController::class, 'show'])
    ->name('intellectual-properties.show')
    ->middleware('auth');
Route::get('intellectual-properties/{intellectualProperty}/edit', [IntellectualPropertyController::class, 'edit']);
// patch method is used to update the resource
Route::patch('intellectual-properties/{intellectualProperty}', [IntellectualPropertyController::class, 'update']);

require __DIR__ . '/auth.php';

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
Route::get('/templates/download/{id}', 'App\Http\Controllers\TemplatesController@download')->name('download');




Route::get('/blog-details', function(){
    return view('website_components.blog-details');
});
