<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// HOME
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// ABOUT - READ MORE
Route::get('/readmore', function () {
    return view('pages.readmore');
})->name('about.readmore');

// SERVICES
Route::get('/services', function () {
    return view('pages.allservices');
})->name('services');

// Optional: All Services Page
Route::get('/services/all', function () {
    return view('pages.allservices');
})->name('services.all');

// FLEETS
Route::get('/morefleets', function () {
    return view('pages.morefleet');
})->name('fleets');


Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('contact.send');
