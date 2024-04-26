<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;

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
    return view('welcome');
});
Route::get('/', [homeController::class, 'Index'])->name('home');
Route::get('/collections', [homeController::class, 'Collection'])->name('collection');
Route::get('/modern', [homeController::class, 'Modern'])->name('modern');
Route::get('/classical', [homeController::class, 'Classical'])->name('classical');
Route::get('/wardrobe', [homeController::class, 'Wardrobe'])->name('wardrobe');
Route::get('/ourAssociation', [homeController::class, 'OurAssociation'])->name('ourAssociation');
Route::get('/galleryVideo', [homeController::class, 'GalleryVideo'])->name('galleryVideo');
Route::get('/galleryImages', [homeController::class, 'GalleryImages'])->name('galleryImages');
Route::get('/location', [homeController::class, 'Location'])->name('location');
Route::get('/trends', [homeController::class, 'Trends'])->name('trends');
Route::get('/careerWith', [homeController::class, 'CareerWith'])->name('careerwith');
Route::get('/aboutus', [homeController::class, 'Aboutus'])->name('aboutus');
Route::get('/testimonials', [homeController::class, 'Testimonials'])->name('testimonials');
Route::get('/contactUs', [homeController::class, 'ContactUs'])->name('contactUs');
Route::get('/blog', [homeController::class, 'Blog'])->name('blog');