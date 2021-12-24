<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/conservationArea', [App\Http\Controllers\ConservationAreaController::class, 'index'])->name('conservationArea');
Route::get('/conservationArea/{id}', [App\Http\Controllers\DetailConservationController::class, 'index'])->name('detailConservation');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [App\Http\Controllers\NewsDetailController::class, 'index'])->name('newsDetail');

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/event/{id}', [App\Http\Controllers\EventDetailController::class, 'index'])->name('eventDetail');

Route::get('/submission', [App\Http\Controllers\SubmissionController::class, 'index'])->name('eventDetail');
Route::get('/submission/success', [App\Http\Controllers\SubmissionController::class, 'successSubmission'])->name('successSubmission');

Auth::routes();
Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'successRegister'])->name('successRegister');

// Pemohon
Route::prefix('applicant')
        ->namespace('Applicant')
        ->group(function() {
            Route::get('/', [\App\Http\Controllers\Applicant\DashboardController::class, 'index'])->name('dashboardApplicant');
        });

// Super Admin
// Pimpinan
// Admin Lapangan