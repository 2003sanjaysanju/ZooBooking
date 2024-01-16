<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
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
    return view('welcomePage.index');
});

Route::get('/check', function () {
    return view('bookTicket.checkTicket');
});

Route::get('/booking',[BookingController::class,'bookingForm'])->name('booking-form');
Route::post('/booking/save',[BookingController::class,'booking'])->name('booking');

Route::get('/ticket',[BookingController::class,'ticket'])->name('ticket');
Route::post('/checkTicket',[BookingController::class,'checkTicket'])->name('checkTicket');
Route::view('/about','pages.about.about')->name('about-us');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
