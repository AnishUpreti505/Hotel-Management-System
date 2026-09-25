<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/home', function () {
    return view('home.index');
})->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/about', function () {
    return view('home.index');
})->name('about');

Route::get('/room', function () {
    return view('home.index');
})->name('room');

Route::get('/gallery', function () {
    return view('home.index');
})->name('gallery');

Route::get('/blog', function () {
    return view('home.index');
})->name('blog');

Route::get('/contact', function () {
    return view('home.index');
})->name('contact');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->get('/dashboard-redirect', [AdminController::class, 'index'])
    ->name('dashboard.redirect');