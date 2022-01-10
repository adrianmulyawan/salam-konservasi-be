<?php

use App\Http\Controllers\Admin\DashboardConservationAreaController;
use App\Http\Controllers\Admin\DashboardConservationAreaGalleryController;
use App\Http\Controllers\Admin\DashboardDestinationEntryController;
use App\Http\Controllers\Admin\DashboardEntranceFeeController;
use App\Http\Controllers\Admin\DashboardEventController;
use App\Http\Controllers\Admin\DashboardManageUserController;
use App\Http\Controllers\Admin\DashboardNewsController;
use App\Http\Controllers\Admin\DashboardVisitorEquipmentController;
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
Route::get('/conservation-area/{slug}', [App\Http\Controllers\DetailConservationController::class, 'index'])
    ->name('detailConservation');

Route::get('/news', [App\Http\Controllers\NewsController::class, 'index'])
    ->name('news');
Route::get('/news/{slug}', [App\Http\Controllers\NewsDetailController::class, 'index'])
    ->name('newsDetail');

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])
    ->name('event');
Route::get('/event/{slug}', [App\Http\Controllers\EventDetailController::class, 'index'])
    ->name('eventDetail');

Route::get('/submission', [App\Http\Controllers\SubmissionController::class, 'index'])
    ->name('submission');
Route::get('/submission/success', [App\Http\Controllers\SubmissionController::class, 'successSubmission'])
    ->name('successSubmission');

Auth::routes();
Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'successRegister'])
    ->name('successRegister');

// Pemohon
Route::prefix('dashboard/applicant')
    ->namespace('Applicant')
    ->middleware(['auth', 'checkRole:applicant'])
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
Route::prefix('dashboard/admin')
    ->name('Admin')
    ->middleware(['auth', 'checkRole:superadmin'])
    ->group(function() {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardAdminController::class, 'index'])
            ->name('dashboardAdmin');

        Route::resource('/manage-conservation-area', DashboardConservationAreaController::class);

        Route::resource('/manage-gallery', DashboardConservationAreaGalleryController::class);

        Route::resource('/manage-news', DashboardNewsController::class);

        Route::resource('/manage-event', DashboardEventController::class);

        Route::resource('/destination-entry', DashboardDestinationEntryController::class);

        Route::resource('/entrance-fee', DashboardEntranceFeeController::class);

        Route::resource('/visitor-equipment', DashboardVisitorEquipmentController::class);

        Route::resource('/manage-user', DashboardManageUserController::class);

        Route::get('/manage-submission', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'index'])
            ->name('manageSubmission');
        Route::get('/manage-submission/{id}/change-status', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'changeSubmissionStatus'])
            ->name('changeSubmissionStatus');
        Route::get('/manage-submission/status/approved/{id}', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'submissionStatusApproved'])
            ->name('submissionStatusApproved');
        Route::get('/manage-submission/status/rejected/{id}', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'submissionStatusRejected'])
            ->name('submissionStatusRejected');
        Route::get('/manage-submission/status/failed/{id}', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'submissionStatusFailed'])
            ->name('submissionStatusFailed');
        
        Route::get('/manage-transaction', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'index'])
            ->name('manageTransaction');
        Route::get('/manage-transaction/{id}/change-status', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'changeTransactionStatus'])
            ->name('changeTransactionStatus');
        Route::get('/manage-transaction/status/paid-off/{id}', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'transactionStatusPaidOff'])
            ->name('transactionStatusPaidOff');
        Route::get('/manage-transaction/status/failed/{id}', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'transactionStatusFailed'])
            ->name('transactionStatusFailed');
        
        Route::get('/manage-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'index'])
            ->name('manageEntryPermit');
        Route::get('/manage-entry-permit/{id}/upload-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'uploadEntryPermit'])
            ->name('uploadEntryPermit');
        Route::get('/manage-entry-permit/{id}/detail-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'detailEntryPermit'])
            ->name('detailEntryPermit');
        
        Route::get('/entry-permit', [\App\Http\Controllers\Admin\DashboardEntryPermitController::class, 'index'])
            ->name('entryPermit');
        
        Route::get('/user-aspiration', [\App\Http\Controllers\Admin\DashboardUserAspirationController::class, 'index'])
            ->name('userAspirationAdmin');
        Route::get('/user-aspiration/{id}/detail', [\App\Http\Controllers\Admin\DashboardUserAspirationController::class, 'detail'])
            ->name('userAspirationDetailAdmin');

        Route::get('/visitor-control', [\App\Http\Controllers\Admin\DashboardVisitorControlController::class, 'index'])
            ->name('visitorControlAdmin');

        Route::get('/admin-setting-account', [\App\Http\Controllers\Admin\DashboardSettingAdminController::class, 'edit'])
            ->name('settingAccountAdmin');
        Route::put('/admin-setting-account/update', [\App\Http\Controllers\Admin\DashboardSettingAdminController::class, 'update'])
            ->name('updateAccountAdmin');
    }
);

// Pimpinan
Route::prefix('dashboard/leader')
    ->name('Leader')
    ->middleware(['auth', 'checkRole:leader'])
    ->group(function() {
        Route::get('/', [\App\Http\Controllers\Leader\DashboardController::class, 'index'])
            ->name('dashboardLeader');

        Route::get('/submission', [\App\Http\Controllers\Leader\DashboardSubmissionController::class, 'index'])
            ->name('dashboardLeaderSubmission');
        Route::get('/submission/status/pending/{id}', [\App\Http\Controllers\Leader\DashboardSubmissionController::class, 'submissionPending'])
            ->name('dashboardLeaderSubmissionPending');
        Route::get('/submission/status/approved/{id}', [\App\Http\Controllers\Leader\DashboardSubmissionController::class, 'submissionApproved'])
            ->name('dashboardLeaderSubmissionApproved');
        Route::get('/submission/status/rejected/{id}', [\App\Http\Controllers\Leader\DashboardSubmissionController::class, 'submissionRejected'])
            ->name('dashboardLeaderSubmissionRejected');
        Route::get('/submission/status/failed/{id}', [\App\Http\Controllers\Leader\DashboardSubmissionController::class, 'submissionFailed'])
            ->name('dashboardLeaderSubmissionFailed');

        Route::get('/payment', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'index'])
            ->name('dashboardLeaderPayment');
        Route::get('/payment/status/pending/{id}', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'paymentPending'])
            ->name('dashboardLeaderPaymentPending');
        Route::get('/payment/status/paid/{id}', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'paymentPaid'])
            ->name('dashboardLeaderPaymentPaid');
        Route::get('/payment/status/failed/{id}', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'paymentFailed'])
            ->name('dashboardLeaderPaymentFailed');

        Route::get('/area-entry', [\App\Http\Controllers\Leader\DashboardAreaEntryController::class, 'index'])
            ->name('areaEntryLeader');

        Route::get('/monthly-submission', [\App\Http\Controllers\Leader\DashboardMonthlySubmissionController::class, 'index'])
            ->name('monthlySubmissionSummary');

        Route::get('/user-aspiration', [\App\Http\Controllers\Leader\DashboardUserAspirationController::class, 'index'])
            ->name('userAspirationLeader');
        
        Route::get('/leader-visitor-control', [\App\Http\Controllers\Leader\DashboardVisitorControlController::class, 'index'])
            ->name('leaderVisitorControl');

        Route::get('/leader-setting-account', [\App\Http\Controllers\Leader\DashboardSettingLeaderController::class, 'index'])
            ->name('settingAccountLeader');
    }
);

// Admin Lapangan
Route::prefix('dashboard/fieldAdmin')
    ->namespace('FieldAdmin')
    ->middleware(['auth', 'checkRole:fieldadmin'])
    ->group(function() {
        Route::get('/', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'index'])
            ->name('dashboardFieldAdmin');
        Route::get('/visit/detail-visit/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'detailVisit'])
            ->name('detailVisit');
        Route::get('/visit/add-entry/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'addEntry'])
            ->name('addEntry');
        Route::get('/visit/add-exit/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'addExit'])
            ->name('addExit');

        Route::get('/visitor-checkout', [\App\Http\Controllers\FieldAdmin\VisitorCheckoutController::class, 'index'])
            ->name('visitorCheckout');

        Route::get('/field-admin-setting-account', [\App\Http\Controllers\FieldAdmin\SettingFieldAdminController::class, 'index'])
            ->name('settingAccountFieldAdmin');
    }
);