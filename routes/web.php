<?php

use App\Http\Controllers\OthersController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::controller(OthersController::class)->group(function () {
    Route::get('migrate-fresh-seed', 'migrateFreshSeed')->name('migrate.fresh.seed');
    Route::get('optimize-clear', 'optimizeClear')->name('optimize.clear');
    Route::get('composer-update', 'composerUpdate')->name('composer.update');
    Route::get('make-seed', 'makeSeed')->name('make.seed');
});
