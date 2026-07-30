<?php

use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Mengarahkan URL utama langsung ke Controller Portfolio
Route::get('/', [PortfolioController::class, 'index']);
Route::post('/send-message', [PortfolioController::class, 'sendMessage'])->name('message.send');