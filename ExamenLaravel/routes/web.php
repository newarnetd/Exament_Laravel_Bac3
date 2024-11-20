<?php

use App\Http\Controllers\GovernorController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\PreselectorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SenatorController;
use App\Http\Controllers\StateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('/home', function () {
    return view('home.add');
})->middleware(['auth', 'verified'])->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/states/add', [StateController::class, 'create'])->name('states.add');
Route::get('/governor/add', [GovernorController::class, 'create'])->name('governor.add');
Route::get('/preselector/add', [PreselectorController::class, 'create'])->name('preselector.add');
Route::get('/senator/add', [SenatorController::class, 'create'])->name('senator.add');
Route::get('/party', [PartyController::class, 'index'])->name('party');

require __DIR__.'/auth.php';
