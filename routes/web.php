<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::prefix('/')->group(function () {
    Route::get('/', [MainController::class, 'home'])->name('home');
});



Route::middleware(['role:admin'])->prefix('dashboard')->group(function () {
    Route::resource('users', UserController::class)->except([
        'show'
    ]);
    Route::resource('options', OptionController::class)->except([
        'show', 'edit', 'update'
    ]);
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::middleware(['auth'])->get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::middleware(['auth'])->get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware(['auth'])->patch('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
Route::middleware(['auth'])->delete('/profile/edit', [ProfileController::class, 'destroy'])->name('profile.destroy');

require __DIR__.'/auth.php';


