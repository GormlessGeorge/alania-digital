<?php

use App\Http\Controllers\BuildingTypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\TownController;
use Illuminate\Foundation\Application;

//use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [PostController::class, 'create'])->name('home');
Route::post('/create-post', [PostController::class, 'store'])->name('create-post');
Route::patch('/posts/{id}/publish', [PostController::class, 'publish']);
Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})->name('profile');

Route::middleware(['auth', 'can:is-moderator'])->group(function () {
    Route::get('/dashboard/moderator', [PostController::class, 'index'])->name('moderator.dashboard');
//    Route::resource('/dashboard/moderator/posts', PostController::class)->except('index', 'store');
    Route::resource('/dashboard/moderator/regions', RegionController::class);
    Route::resource('/dashboard/moderator/towns', TownController::class);
    Route::resource('/dashboard/moderator/streets', StreetController::class);
    Route::resource('/dashboard/moderator/building-types', BuildingTypeController::class);
});



require __DIR__ . '/auth.php';
