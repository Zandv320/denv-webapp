<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// API route for contact form
Route::post('/api/contact', [ContactController::class, 'store']);

// Catch-all route for Vue.js frontend (must be last!)
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');
