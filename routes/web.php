<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\NewHomepageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\DetailLeadsController;
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
Route::get('/laby', [LabController::class, 'lab'])->name('labPage');
Route::get('/old', [PageController::class, 'homePage'])->name('homePageOld');
Route::get('/harga', [PageController::class, 'pricingPage'])->name('pricingPage');
Route::get('/petunjuk', [PageController::class, 'faqPage'])->name('faqPage');
Route::get('/fitur', [PageController::class, 'fiturPage'])->name('fiturPage');

Route::get('/daftar', [RegisterController::class, 'registerPage'])->name('registerPage');
Route::get('/cloud-warehouse-marketplace-integration', [LandingPageController::class, 'landingPage'])->name('landingPage');

// NEW HOME
Route::get('/', [NewHomepageController::class, 'homePage'])->name('homePage');
Route::get('/tentang-kami', [NewHomepageController::class, 'aboutUs'])->name('aboutUsPage');
Route::get('/partner-integrasi', [NewHomepageController::class, 'partnerPage'])->name('partnerPage');
Route::get('/solusi', [NewHomepageController::class, 'solusiPage'])->name('solusiPage');
Route::get('/hubungi-kami', [NewHomepageController::class, 'contactUsPage'])->name('contactUsPage');

Route::get('/blogs', [NewHomepageController::class, 'blogPage'])->name('blogPage');
Route::get('/blogs/{slug}', [NewHomepageController::class, 'blogDetailPage'])->name('blogDetailPage');



// POST PROCESS
Route::post('/post/discussion', [PostController::class, 'makeDiscussion'])->name('makeDiscussion');
Route::post('/post/contact-us', [PostController::class, 'contactUs'])->name('contactUsPost');


// CRUDBOOSTER CUSTOM VIEW
Route::get('admin/detail-lead/{id}', [DetailLeadsController::class, 'detailLeadsPage'])->name('detailLeadsPage');
Route::post('admin/change-status/{id}',[DetailLeadsController::class, 'changeStatus'])->name('changeStatusLead');
Route::post('admin/update-lead-data/{id}', [DetailLeadsController::class, 'updateDetail'])->name('updateDataLead');
Route::post('admin/save-activity', [DetailLeadsController::class, 'saveFollowUp'])->name('saveFollowUp');
Route::post('admin/change-assign-to', [DetailLeadsController::class, 'assignLeads'])->name('assignLeads');
