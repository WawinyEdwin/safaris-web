<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\HolidayController;
use App\Http\Controllers\HoneyMoonController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\Auth\RegisterController;

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


// Home Page static routes 

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/awards', [HomeController::class, 'awards'])->name('awards');
Route::get('/faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('/help', [HomeController::class, 'help'])->name('help');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/testimonies', [HomeController::class, 'testimony'])->name('testimony');
Route::get('/travel-info', [HomeController::class, 'travel'])->name('travel');
Route::get('/affiliation', [HomeController::class, 'affiliation'])->name('affiliation');
Route::get('/media', [HomeController::class, 'media'])->name('media');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

//Admin dashboard Authentication middleware

Route::get('/admin', [ToursController::class, 'admin'])->name('admin')->middleware('auth');

//RESOURCE ROUTES.

Route::resource('bookings', BookingController::class);


Route::resource('enquiries', EnquiryController::class);

Route::resource('blogs', BlogController::class);

Route::resource('videos', VideoController::class);

Route::resource('highlights', HighlightController::class);

//AUTHENTICATED RESOURCE ROUTES.
Route::resource('tours', ToursController::class)->middleware('auth');

//DYNAMIC TOUR ROUTE.
Route::get('/tour/{category}', [HomeController::class, 'tours'])->name('tour');
Route::get('/tour/categories/{sub_category}', [HomeController::class, 'tour_cat'])->name('tour_cat');


Route::resource('categories', CategoryController::class)->middleware('auth');

//SUB CATEGORIES ROUTE

Route::get('/sub_category/create',[CategoryController::class, 'sub_create'])->name('create_sub');
Route::post('/sub_category/new',[CategoryController::class, 'store_sub'])->name('store_sub');
Route::get('/sub_category/edit/{id}',[CategoryController::class, 'sub_edit'])->name('edit_sub');
Route::post('/sub_category/update/{id}',[CategoryController::class, 'update_sub'])->name('update_sub');
Route::delete('/sub_category/delete/{id}',[CategoryController::class, 'destroy_sub'])->name('delete_sub');



// Route::get('/featured', [HomeController::class, 'featured'])->name('featured');

Route::get('send-mail', function() {
    $successMessage = [
        'title' => 'Booking Confirmation',
        'body' => 'We have recieved your details and one of our representatives will get back to you with further details.'
    ];

    \Mail::to('crud3swift@gmail.com')->send( new \App\Mail\BookingMail($successMessage));

});

//AUTH ROUTE
Auth::routes();

//RESET CREDENTIALS ROUTE
Route::get('/update-user', [HomeController::class, 'updateView'])->name('updatePage');

Route::post('/update/{id}', [HomeController::class, 'update'])->name('updateUser');

//TOUR SEARCH ROUTE.
Route::get('/search',[HomeController::class, 'search'])->name('search');

