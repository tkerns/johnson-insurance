<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
// Route::get('/customer-service', [PagesController::class, 'service']);
Route::get('/news', [PagesController::class, 'news']);
Route::get('/business', [PagesController::class, 'business']);
Route::get('/personal', [PagesController::class, 'personal']);
Route::get('/industries', [PagesController::class, 'industries']);

