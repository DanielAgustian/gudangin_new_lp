<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'homePage'])->name('homePage');
Route::get('/harga', [PageController::class, 'pricingPage'])->name('pricingPage');
Route::get('/petunjuk', [PageController::class, 'faqPage'])->name('faqPage');
Route::get('/fitur', [PageController::class, 'fiturPage'])->name('fiturPage');
