<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TwelvethController;

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

Route::get('/', function () {
    return view('home');
})->middleware(['auth.shopify'])->name('home');

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/1er', [\App\Http\Controllers\FirstController::class, 'index'])->name('first-district');
Route::get('/2e', [\App\Http\Controllers\SecondController::class, 'index'])->name('second-district');
Route::get('/3e', [\App\Http\Controllers\ThirdController::class, 'index'])->name('third-district');
Route::get('/4e', [\App\Http\Controllers\FourthController::class, 'index'])->name('fourth-district');
Route::get('/5e', [\App\Http\Controllers\FifthController::class, 'index'])->name('fifth-district');
Route::get('/6e', [\App\Http\Controllers\SixthController::class, 'index'])->name('sixth-district');
Route::get('/7e', [\App\Http\Controllers\SeventhController::class, 'index'])->name('seventh-district');
Route::get('/8e', [\App\Http\Controllers\EighthController::class, 'index'])->name('eighth-district');
Route::get('/9e', [\App\Http\Controllers\NinethController::class, 'index'])->name('nineth-district');
Route::get('/10e', [\App\Http\Controllers\TenthController::class, 'index'])->name('tenth-district');
Route::get('/11e', [\App\Http\Controllers\EleventhController::class, 'index'])->name('eleventh-district');
Route::get('/12e', [\App\Http\Controllers\TwelvethController::class, 'index'])->name('twelveth-district');
Route::get('/13e', [\App\Http\Controllers\ThirdtenthController::class, 'index'])->name('thirdtenth-district');
Route::get('/14e', [\App\Http\Controllers\FourtenthController::class, 'index'])->name('fourtenth-district');
Route::get('/15e', [\App\Http\Controllers\FiftenthController::class, 'index'])->name('fiftenth-district');
Route::get('/16e', [\App\Http\Controllers\SixtenthController::class, 'index'])->name('sixtenth-district');
Route::get('/17e', [\App\Http\Controllers\SevententhController::class, 'index'])->name('sevententh-district');
Route::get('/18e', [\App\Http\Controllers\EightenthController::class, 'index'])->name('eightenth-district');
Route::get('/19e', [\App\Http\Controllers\NinetenthController::class, 'index'])->name('ninetenth-district');
Route::get('/20e', [\App\Http\Controllers\TwentythController::class, 'index'])->name('twentyth-district');

Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('product');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/select-product', [\App\Http\Controllers\SellerController::class, 'index'])->name('select-product');

Route::get('/1-product', [\App\Http\Controllers\OneController::class, 'index'])->name('add-one-product');
Route::post('/admin-one' , [\App\Http\Controllers\OneController::class, 'store'])->name('success-one');

Route::get('/2-product', [\App\Http\Controllers\TwoController::class, 'index'])->name('add-two-product');
Route::post('/admin-two' , [\App\Http\Controllers\TwoController::class, 'store'])->name('success-two');

Route::get('/3-product', [\App\Http\Controllers\ThreeController::class, 'index'])->name('add-three-product');
Route::post('/admin-three' , [\App\Http\Controllers\ThreeController::class, 'store'])->name('success-three');

Route::get('/4-product', [\App\Http\Controllers\FourController::class, 'index'])->name('add-four-product');
Route::post('/admin-four' , [\App\Http\Controllers\FourController::class, 'store'])->name('success-four');

Route::get('/5-product', [\App\Http\Controllers\FiveController::class, 'index'])->name('add-five-product');
Route::post('/admin-five' , [\App\Http\Controllers\FiveController::class, 'store'])->name('success-five');

Route::get('/select-district', [\App\Http\Controllers\SellerController::class, 'index'])->name('select-district');