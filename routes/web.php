<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\HoneyMoonController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/awards', [HomeController::class, 'awards'])->name('awards');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/testimonies', [HomeController::class, 'testimony'])->name('testimony');
Route::get('/travel-info', [HomeController::class, 'travel'])->name('travel');
Route::get('/affiliation', [HomeController::class, 'affiliation'])->name('affiliation');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/videos', [HomeController::class, 'videos'])->name('videos');


Route::get('/admin', [ToursController::class, 'index'])->name('admin');

Route::resource('bookings', BookingController::class);

Route::resource('tours', ToursController::class);

Route::get('/featured', HomeController::class, 'featured')->name('featured');


Route::get('send-mail', function() {
    $successMessage = [
        'title' => 'Booking Confirmation',
        'body' => 'We have recieved your details and one of our representatives will get back to you with further details.'
    ];

    \Mail::to('crud3swift@gmail.com')->send( new \App\Mail\BookingMail($successMessage));

});