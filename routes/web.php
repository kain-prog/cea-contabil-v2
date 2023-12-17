<?php

use App\Http\Controllers\SendmailController;
use App\Http\Controllers\SimpleSubscriberMailController;
use App\Http\Controllers\SubscriberMailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layout');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/politicas-de-privacidade', function () {
    return view('politicas-de-privacidade');
})->name('politicas-pv');

Route::post('/contact', [ SendmailController::class, 'store' ]  )->name('sendmail');
Route::post('/subscriber', [ SubscriberMailController::class, 'store' ]  )->name('subscriber');
Route::post('/simple-subscriber', [ SimpleSubscriberMailController::class, 'store' ]  )->name('simple-subscriber');
