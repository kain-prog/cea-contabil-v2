<?php

use App\Http\Controllers\SendmailController;
use App\Http\Controllers\SimpleSubscriberMailController;
use App\Http\Controllers\SubscriberMailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ SendmailController::class, 'store' ]  )->name('sendmail');
Route::post('/subscriber', [ SubscriberMailController::class, 'store' ]  )->name('subscriber');
Route::post('/simple-subscriber', [ SimpleSubscriberMailController::class, 'store' ]  )->name('simple-subscriber');
