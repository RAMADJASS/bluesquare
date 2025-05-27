<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

Route::post('/contact', function (Request $request) {
    // Traitement simple pour test
    return back()->with('success', 'Message envoyé avec succès !');
})->name('contact.send');
