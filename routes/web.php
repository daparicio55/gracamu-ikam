<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('gracamu');
})->name('home');

Route::post('/contacto', [ContactController::class, 'store'])->name('contact.store');
