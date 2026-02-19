<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController; 

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about']);
Route::get('/services', [SiteController::class, 'services']);
Route::get('/contact', [SiteController::class, 'contact'])->name('contact.page');

Route::get('/admin', [SiteController::class, 'admin'])->middleware('auth');
Route::get('/services', [SiteController::class, 'services']);