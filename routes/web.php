<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/About-Us', [HomeController::class, 'about'])->name('about');
Route::get('/Airport-Taxi', [HomeController::class, 'airport'])->name('airport');
Route::get('/Outstation-Taxi', [HomeController::class, 'outstation'])->name('outstation');
Route::get('/One-way-drop', [HomeController::class, 'oneway'])->name('oneway');
Route::get('/Local-Taxi', [HomeController::class, 'local'])->name('local');
Route::get('/Contact-us', [HomeController::class, 'contact'])->name('contact');
Route::get('/Privacy-Policy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/Terms-Condition', [HomeController::class, 'terms'])->name('terms');

// form submission
Route::get('/Airport-Taxi-form', [HomeController::class, 'airport_form'])->name('airport_form');
Route::get('/Outstation-Taxi-form', [HomeController::class, 'outstation_form'])->name('outstationt_form');
Route::get('/One-way-Taxi-form', [HomeController::class, 'oneway_form'])->name('oneway_form');
Route::get('/Local-Taxi-form', [HomeController::class, 'local_form'])->name('local_form');
