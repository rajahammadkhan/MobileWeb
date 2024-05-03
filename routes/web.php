<?php

//Frontend Controller
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\BrandController;
use App\Http\Controllers\Frontend\AeMobileController;
use App\Http\Controllers\Frontend\ContactUsController;
//Backend Controller
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Management\MobileController;
use App\Http\Controllers\Management\BlogController;
use App\Http\Controllers\Management\MediaController;
use App\Http\Controllers\Management\MobileBrandController;
use App\Http\Controllers\Management\MobileCategoryController;
use App\Http\Controllers\Management\MobileOperatingSystemController;
use App\Http\Controllers\Management\MobileReviewController;
use App\Http\Controllers\Management\MobileStatusController;
use App\Http\Controllers\Management\ProcessorSizeController;
use App\Http\Controllers\Management\ProcessorTypeController;
use App\Http\Controllers\Management\ContactController;
use Illuminate\Support\Facades\Route;
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

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return  "all cleared ...";

});
Route::fallback(function () {
    return view("404");
});

//Frontend Controller
Route::get('/', [FrontendController::class, 'index']);
Route::get('/brand', [FrontendController::class, 'Brand']);
Route::get('/privacy', [FrontendController::class, 'Privacy']);
Route::get('fetch-collection', [FrontendController::class, 'getCollection']);
Route::get('advanced-search', [FrontendController::class, 'advancedSearch']);
Route::get('advanced-collection', [AeMobileController::class, 'advancedCollection'])->name('advanced-collection');

//Brand Controller
Route::get('/brand/{slug}', [BrandController::class, 'brandDetail']);
Route::post('/brand/mobile/{slug}', [BrandController::class, 'mobileBrandCollection']);

//Mobile Controller
Route::get('/mobile/{slug}', [AeMobileController::class, 'Detail']);
Route::get('/collection', [AeMobileController::class, 'Collection']);


//ContactUs Controller
Route::get('/contact', [ContactUsController::class, 'Contact'])->name('contact');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact-us');
Route::post('/review', [ContactUsController::class, 'Review'])->name('review');



//Management Controller
Route::middleware(['auth'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index']);
    Route::resource('admin/mobiles', MobileController::class);  
    //Image-delete
    Route::post('image-delete', [MobileController::class, 'imageDelete']);
    Route::resource('admin/blogs', BlogController::class);    
    Route::resource('admin/mobile-brand', MobileBrandController::class);
    Route::resource('admin/mobile-category', MobileCategoryController::class);
    Route::resource('admin/mobile-operating-system', MobileOperatingSystemController::class);
    Route::resource('admin/mobile-status', MobileStatusController::class);
    Route::resource('admin/mobile-processor-size', ProcessorSizeController::class);
    Route::resource('admin/mobile-processor-type', ProcessorTypeController::class);
    Route::resource('admin/reviews', MobileReviewController::class);
    Route::resource('admin/contacts', ContactController::class);
});
Auth::routes();