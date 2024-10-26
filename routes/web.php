<?php

use App\Http\Controllers\FrontEnd\AboutController;
use App\Http\Controllers\FrontEnd\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Middleware\Lang;
use Illuminate\Support\Facades\Route;

Route::get('lang/{lang}', [LangController::class, 'lang']);
// home route
Route::get('/', [HomeController::class, 'index'])->name('home.index');

// Correctly defined in routes/web.php
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

