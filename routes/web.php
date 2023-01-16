<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ToursController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
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

//Enquiry Routes
Route::resource('enquiries', EnquiryController::class);


//bookings
Route::get('/bookings',[BookingController::class, 'index'])->name('bookings')->middleware(['auth', 'verified']);
Route::get('/bookings/show/{id}',[BookingController::class, 'show'])->name('bookings.show')->middleware(['auth', 'verified']);
Route::get('/bookings/create/{destination}',[BookingController::class, 'create'])->name('bookings.create')->middleware(['auth', 'verified']);
Route::post('/bookings/new',[BookingController::class, 'store'])->name('bookings.store')->middleware(['auth', 'verified']);
Route::get('/bookings/edit/{id}',[BookingController::class, 'edit'])->name('bookings.edit')->middleware(['auth', 'verified']);
Route::post('/bookings/update/{id}',[BookingController::class, 'update'])->name('bookings.update')->middleware(['auth', 'verified']);
Route::delete('/bookings/delete/{id}',[BookingController::class, 'destroy'])->name('bookings.delete')->middleware(['auth', 'verified']);
Route::delete('/bookings/publish/{id}',[BookingController::class, 'confirm'])->name('bookings.confirm')->middleware(['auth', 'verified']);

//TOURS
Route::get("/safaris", [ToursController::class, 'safaris'])->name("safaris");
Route::get('/addtour',[ToursController::class, 'index'])->name('tours')->middleware(['auth', 'verified']);
Route::get('/addtour/show/{id}',[ToursController::class, 'show'])->name('addtour.show')->middleware(['auth', 'verified']);
Route::get('/addtour/create',[ToursController::class, 'create'])->name('addtour.create')->middleware(['auth', 'verified']);
Route::post('/addtour/store',[ToursController::class, 'store'])->name('addtour.store')->middleware(['auth', 'verified']);
Route::get('/addtour/edit/{id}',[ToursController::class, 'edit'])->name('addtour.edit')->middleware(['auth', 'verified']);
Route::post('/addtour/update/{id}',[ToursController::class, 'update'])->name('addtour.update')->middleware(['auth', 'verified']);
Route::delete('/addtour/delete/{id}',[ToursController::class, 'destroy'])->name('addtour.delete')->middleware(['auth', 'verified']);
Route::put('/addtour/publish/{id}',[ToursController::class, 'publish'])->name('addtour.publish')->middleware(['auth', 'verified']);


//TOUR SEARCH ROUTE.
Route::get('/search',[HomeController::class, 'search'])->name('search');

//BLOGS
Route::get('/blogs',[BlogController::class, 'index'])->name('blogs');
Route::get('/blogs/create',[BlogController::class, 'create'])->name('blogs.create')->middleware(['auth', 'verified']);
Route::get('/blogs/show/{id}',[BlogController::class, 'show'])->name('blogs.show');
Route::post('/blogs/store',[BlogController::class, 'store'])->name('blogs.store')->middleware(['auth', 'verified']);
Route::get('/blogs/edit/{id}',[BlogController::class, 'edit'])->name('blogs.edit')->middleware(['auth', 'verified']);
Route::post('/blogs/update/{id}',[BlogController::class, 'update'])->name('blogs.update')->middleware(['auth', 'verified']);
Route::delete('/blogs/delete/{id}',[BlogController::class, 'destroy'])->name('blogs.delete')->middleware(['auth', 'verified']);
Route::put('/blogs/publish/{id}',[BlogController::class, 'publish'])->name('blogs.publish')->middleware(['auth', 'verified']);


//VIDEOS
Route::get('/videos',[VideoController::class, 'index'])->name('videos');
Route::get('/videos/create',[VideoController::class, 'create'])->name('videos.create')->middleware(['auth', 'verified']);
Route::post('/videos/store',[VideoController::class, 'store'])->name('videos.store')->middleware(['auth', 'verified']);
Route::get('/videos/edit/{id}',[VideoController::class, 'edit'])->name('videos.edit')->middleware(['auth', 'verified']);
Route::post('/videos/update/{id}',[VideoController::class, 'update'])->name('videos.update')->middleware(['auth', 'verified']);
Route::delete('/videos/delete/{id}',[VideoController::class, 'destroy'])->name('videos.delete')->middleware(['auth', 'verified']);

//DYNAMIC TOUR ROUTE.
Route::get('/tours/{category}', [HomeController::class, 'tours'])->name('tour');
Route::get('/tours/categories/{sub_category}', [HomeController::class, 'tour_cat'])->name('tour_cat');




//CATEGORIES ROUTE
Route::get('/categories',[CategoryController::class, 'index'])->name('categories');
Route::get('/category/create',[CategoryController::class, 'create'])->name('category.create')->middleware(['auth', 'verified']);
Route::post('/category/new',[CategoryController::class, 'store'])->name('category.store')->middleware(['auth', 'verified']);
Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit')->middleware(['auth', 'verified']);
Route::post('/category/update/{id}',[CategoryController::class, 'update'])->name('category.update')->middleware(['auth', 'verified']);
Route::delete('/category/delete/{id}',[CategoryController::class, 'destroy'])->name('category.delete')->middleware(['auth', 'verified']);

//HIGHLIGHTS
Route::resource('highlights', HighlightController::class);

//AUTH ROUTE
Auth::routes(['verify' => true]);
// Email Verification Routes.......................................................
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//CREDENTIALS ROUTE
Route::get('/profile', [BookingController::class, 'profile'])->name('profile')->middleware(['auth', 'verified']);
Route::get('/users', [UserController::class, 'users'])->name('users');
Route::get('/users/update-user/{id}', [UserController::class, 'updateView'])->name('updatePage');
Route::post('users/update/{id}', [UserController::class, 'update'])->name('updateUser');
Route::delete('users/delete', [UserController::class, 'destroy'])->name('deleteUser');




// services
Route::get("/all-products", [ProductController::class, "all"])->name("products.all")->middleware(['auth', 'verified']);
Route::get("/products", [ProductController::class, "index"])->name("products");
Route::get("/product/new", [ProductController::class, "create"])->name("products.create")->middleware(['auth', 'verified']);
Route::post("/product/create", [ProductController::class, "store"])->name("products.store")->middleware(['auth', 'verified']);
Route::get("/product/category/{category}", [ProductController::class, "category"])->name("products.category")->middleware(['auth', 'verified']);
Route::get("/product/edit/{id}", [ProductController::class, "edit"])->name("products.edit")->middleware(['auth', 'verified']);
Route::put("/product/update/{id}", [ProductController::class, "update"])->name("products.update")->middleware(['auth', 'verified']);
Route::get("/product/{slug}", [ProductController::class, "show"])->name("products.show");
Route::put("/product/publish/{id}", [ProductController::class, "publish"])->name("products.publish")->middleware(['auth', 'verified']);
Route::delete('/product/delete/{id}',[CategoryController::class, 'destroy'])->name('products.delete')->middleware(['auth', 'verified']);

//services
Route::get("/all-services", [ServiceController::class, "all"])->name("services.all")->middleware(['auth', 'verified']);
Route::get("/services", [ServiceController::class, "index"])->name("services");
Route::get("/service/new", [ServiceController::class, "create"])->name("services.create")->middleware(['auth', 'verified']);
Route::post("/service/create", [ServiceController::class, "store"])->name("services.store")->middleware(['auth', 'verified']);
Route::get("/service/edit/{id}", [ServiceController::class, "edit"])->name("services.edit")->middleware(['auth', 'verified']);
Route::get("/service/category/{category}", [ServiceController::class, "category"])->name("services.category")->middleware(['auth', 'verified']);
Route::put("/service/update/{id}", [ProductController::class, "update"])->name("services.update")->middleware(['auth', 'verified']);
Route::get("/service/{slug}", [ServiceController::class, "show"])->name("services.show");
Route::put("/service/publish/{id}", [ServiceController::class, "publish"])->name("services.publish")->middleware(['auth', 'verified']);
Route::delete('/service/delete/{id}',[ServiceController::class, 'destroy'])->name('services.delete')->middleware(['auth', 'verified']);


//events
Route::get("/all-events", [EventController::class, "all"])->name("events.all")->middleware(['auth', 'verified']);
Route::get("/events", [EventController::class, "index"])->name("events");
Route::get("/event/new", [EventController::class, "create"])->name("events.create")->middleware(['auth', 'verified']);
Route::get("/event/category/{category}", [EventController::class, "category"])->name("events.category")->middleware(['auth', 'verified']);
Route::post("/event/create", [EventController::class, "store"])->name("events.store")->middleware(['auth', 'verified']);
Route::get("/event/edit/{id}", [EventController::class, "edit"])->name("events.edit")->middleware(['auth', 'verified']);
Route::put("/event/update/{id}", [EventController::class, "update"])->name("events.update")->middleware(['auth', 'verified']);
Route::get("/event/{slug}", [EventController::class, "show"])->name("events.show");
Route::put("/event/publish/{id}", [EventController::class, "publish"])->name("events.publish")->middleware(['auth', 'verified']);
Route::delete('/event/delete/{id}',[EventController::class, 'destroy'])->name('events.delete')->middleware(['auth', 'verified']);




