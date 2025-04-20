<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/customer-service', [PagesController::class, 'service']);
Route::get('/news', [PagesController::class, 'news']);

// Business Insurance
Route::get('/business', [PagesController::class, 'business']);
Route::get('/business/workers-comp', [PagesController::class, 'workersComp']);
Route::get('/business/general-liability', [PagesController::class, 'generalLiability']);
Route::get('/business/commercial-property', [PagesController::class, 'commercialProperty']);
Route::get('/business/auto-trucking', [PagesController::class, 'commercialAuto']);
Route::get('/business/equipment', [PagesController::class, 'equipment']);
Route::get('/business/ocean-marine', [PagesController::class, 'marine']);
Route::get('/business/aviation', [PagesController::class, 'aviation']);
Route::get('/business/umbrella', [PagesController::class, 'businessUmbrella']);
Route::get('/business/professional-liability', [PagesController::class, 'professionalLiability']);
Route::get('/business/liquor', [PagesController::class, 'liquor']);
Route::get('/business/employment-practices', [PagesController::class, 'employmentPractices']);
Route::get('/business/cyber-liability', [PagesController::class, 'cyber']);


// Personal Insurance
Route::get('/personal', [PagesController::class, 'personal']);
Route::get('/personal/homeowners', [PagesController::class, 'homeowners']);
Route::get('/personal/auto', [PagesController::class, 'personalAuto']);
Route::get('/personal/watercraft', [PagesController::class, 'watercraft']);
Route::get('/personal/snowmachine', [PagesController::class, 'snowmachine']);
Route::get('/personal/atv', [PagesController::class, 'atv']);
Route::get('/personal/rv', [PagesController::class, 'rv']);
Route::get('/personal/umbrella', [PagesController::class, 'personalUmbrella']);

