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
Route::get('/collections', [homeController::class, 'Collections'])->name('collections');
Route::get('/modern', [homeController::class, 'Modern'])->name('modern');
Route::get('/classical', [homeController::class, 'Classical'])->name('classical');
Route::get('/wardrobe', [homeController::class, 'Wardrobe'])->name('wardrobe');
Route::get('/our-association', [homeController::class, 'OurAssociation'])->name('our-association');
Route::get('/gallery-video', [homeController::class, 'GalleryVideo'])->name('gallery-video');
Route::get('/gallery-images', [homeController::class, 'GalleryImages'])->name('gallery-images');
Route::get('/location', [homeController::class, 'Location'])->name('location');
Route::get('/trends', [homeController::class, 'Trends'])->name('trends');
Route::get('/career-with', [homeController::class, 'CareerWith'])->name('career-with');
Route::get('/about-us', [homeController::class, 'Aboutus'])->name('about-us');
Route::get('/testimonials', [homeController::class, 'Testimonials'])->name('testimonials');
Route::get('/contact-us', [homeController::class, 'ContactUs'])->name('contact-us');
Route::get('/blog', [homeController::class, 'Blog'])->name('blog');
Route::get('/elegant-modular', [homeController::class, 'ElegantModular'])->name('elegant-modular');
Route::get('/handleless-modular', [homeController::class, 'handlelessModular'])->name('handleless-modular');
Route::get('/stylish-and-function-open-modular', [homeController::class, 'StylishAndFunctionOpenModular'])->name('stylish-and-function-open-modular');
Route::get('/modern-country-style-Modular', [homeController::class, 'ModernCountryStyleModular'])->name('modern-country-style-Modular');
Route::get('/modular-kitchen-interior', [homeController::class, 'ModularKitchenInterior'])->name('modular-kitchen-interior');
Route::get('/shape-modular', [homeController::class, 'ShapeModular'])->name('shape-modular');
Route::get('/simple-design-and-graphics-shape-small-modular', [homeController::class, 'SimpleDesigAandGraphicsShapeSmallModular'])->name('simple-design-and-graphics-shape-small-modular');
Route::get('/island-woodern-surface-modular', [homeController::class, 'IslandWoodernSurfaceModular'])->name('island-woodern-surface-modular');
Route::get('/the-classic-country-look-modern-modular', [homeController::class, 'TheClassicCountryLookModernModular'])->name('the-classic-country-look-modern-modular');
Route::get('/modular-kitchen-with-woodern-breakfast-counter', [homeController::class, 'ModularKitchenWithWoodernBreakfastCounter'])->name('modular-kitchen-with-woodern-breakfast-counter');
Route::get('/daf-working-and-dining-open-modular', [homeController::class, 'DafWorkingAndDiningOpenModular'])->name('daf-working-and-dining-open-modular');
Route::get('/open-space-modular-kitchen-with-graphite-shade', [homeController::class, 'OpenSpaceModularKitchenWithGraphiteShade'])->name('open-space-modular-kitchen-with-graphite-shade');
Route::get('/small-modular', [homeController::class, 'SmallModular'])->name('small-modular');
Route::get('/all-white-branded-modular', [homeController::class, 'AllWhiteBrandedModular'])->name('all-white-branded-modular');
Route::get('/island-dining-table-modular', [homeController::class, 'IslandDiningTablemodular'])->name('island-dining-table-modular.blade.php');
Route::get('/classic-l-shape-modular', [homeController::class, 'ClassicLShapeModular'])->name('classic-l-shape-modular');
Route::get('/stunning-classic-modular', [homeController::class, 'StunningClassicModular'])->name('stunning-classic-modular');
Route::get('/classic-island-modular', [homeController::class, 'ClassicIslandModular'])->name('classic-island-modular');
Route::get('/simple-small-modular', [homeController::class, 'SimpleSmallModular'])->name('simple-small-modular');
Route::get('/serenity-sunrise-modular', [homeController::class, 'SerenitySunriseModular'])->name('serenity-sunrise-modular');
Route::get('/central-island-modular', [homeController::class, 'CentralIslandModular'])->name('central-island-modular');
Route::get('/modular-kitchen-with-marble-countertop', [homeController::class, 'ModulaKitchenWithMarbleCountertop'])->name('modular-kitchen-with-marble-countertop');
Route::get('/dining-modular-kitchen', [homeController::class, 'DiningModularKitchen'])->name('dining-modular-kitchen');
Route::get('/walk-in-closet-wardrobe', [homeController::class, 'WalkInClosetWardrobe'])->name('walk-in-closet-wardrobe');
Route::get('/u-shape-walk-in-closet-wardrobe', [homeController::class, 'UShapeWalkInClosetWardrobe'])->name('u-shape-walk-in-closet-wardrobe');