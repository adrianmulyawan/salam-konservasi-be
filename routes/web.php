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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/conservation-area', [App\Http\Controllers\ConservationAreaController::class, 'index'])
    ->name('conservationArea');
Route::get('/conservation-area/{id}', [App\Http\Controllers\DetailConservationController::class, 'index'])
    ->name('detailConservation');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])
    ->name('news');
Route::get('/news/{id}', [App\Http\Controllers\NewsDetailController::class, 'index'])
    ->name('newsDetail');

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])
    ->name('event');
Route::get('/event/{id}', [App\Http\Controllers\EventDetailController::class, 'index'])
    ->name('eventDetail');

Route::get('/submission', [App\Http\Controllers\SubmissionController::class, 'index'])
    ->name('submission');
Route::get('/submission/success', [App\Http\Controllers\SubmissionController::class, 'successSubmission'])
    ->name('successSubmission');

Auth::routes();
Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'successRegister'])
    ->name('successRegister');

// Pemohon
Route::prefix('/dashboard/applicant')
    ->namespace('Applicant')
    ->group(function() {
        Route::get('/', [\App\Http\Controllers\Applicant\DashboardController::class, 'index'])
            ->name('dashboardApplicant');

        Route::get('/submission', [\App\Http\Controllers\Applicant\DashboardSubmissionController::class, 'index'])
            ->name('dashboardSubmission');
        Route::get('/submission/status/pending/{id}', [\App\Http\Controllers\Applicant\DashboardSubmissionController::class, 'submissionPending'])
            ->name('dashboardSubmissionPending');
        Route::get('/submission/status/approved/{id}', [\App\Http\Controllers\Applicant\DashboardSubmissionController::class, 'submissionApproved'])
            ->name('dashboardSubmissionApproved');
        Route::get('/submission/status/rejected/{id}', [\App\Http\Controllers\Applicant\DashboardSubmissionController::class, 'submissionRejected'])
            ->name('dashboardSubmissionRejected');
        Route::get('/submission/status/failed/{id}', [\App\Http\Controllers\Applicant\DashboardSubmissionController::class, 'submissionFailed'])
            ->name('dashboardSubmissionFailed');
        
        Route::get('/payment', [\App\Http\Controllers\Applicant\DashboardPaymentController::class, 'index'])
            ->name('dashboardPayment');
        Route::get('/payment/payment-process', [\App\Http\Controllers\Applicant\DashboardPaymentController::class , 'paymentProcess'])
            ->name('paymentProcess');
        Route::get('/payment/status/paid/{id}', [\App\Http\Controllers\Applicant\DashboardPaymentController::class , 'paymentPaidOff'])
            ->name('paymentPaidOff');
        Route::get('/payment/status/failed/{id}', [\App\Http\Controllers\Applicant\DashboardPaymentController::class , 'paymentFailed'])
            ->name('paymentPaidOff');

        Route::get('/area-entry', [\App\Http\Controllers\Applicant\AreaEntryController::class, 'index'])
            ->name('areaEntryPermit');
        
        Route::get('/setting-account', [\App\Http\Controllers\Applicant\SettingApplicantController::class, 'index'])
            ->name('settingAccountApplicant');
    }
);

// Super Admin
// Pimpinan

// Admin Lapangan
Route::prefix('/dashboard/fieldAdmin')
    ->namespace('FieldAdmin')
    ->group(function() {
        Route::get('/', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'index'])
            ->name('dashboardFieldAdmin');
    }
);