<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

Route::prefix('dashboard')->group(function () {
    
    Route::get('/index', function () {
        return view('dashboard.home.index');
    })->name('dashboard.index');

    Route::get('/classrooms', function () {
        return view('dashboard.classrooms.index');
    })->name('classrooms.index');
});




require __DIR__.'/auth.php';

