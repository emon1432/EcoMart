<?php

use App\Http\Controllers\OthersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home.index');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard.index');
    })->name('dashboard');
});



Route::controller(OthersController::class)->group(function () {
    Route::get('migrate-fresh-seed', 'migrateFreshSeed')->name('migrate.fresh.seed');
    Route::get('optimize-clear', 'optimizeClear')->name('optimize.clear');
    Route::get('composer-update', 'composerUpdate')->name('composer.update');
    Route::get('make-seed', 'makeSeed')->name('make.seed');
});
