<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/customer-service', [PagesController::class, 'service']);

// Business Insurance
Route::get('/business', [PagesController::class, 'business']);

// Personal Insurance
Route::get('/personal', [PagesController::class, 'personal']);
