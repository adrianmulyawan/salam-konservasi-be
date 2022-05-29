<?php

use App\Http\Controllers\Admin\DashboardConservationAreaController;
use App\Http\Controllers\Admin\DashboardConservationAreaGalleryController;
use App\Http\Controllers\Admin\DashboardDestinationEntryController;
use App\Http\Controllers\Admin\DashboardEntranceFeeController;
use App\Http\Controllers\Admin\DashboardEventController;
use App\Http\Controllers\Admin\DashboardManageDownloadController;
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

Route::get('/download', [\App\Http\Controllers\DownloadController::class, 'index'])
    ->name('download');

Route::post('/store-aspiration', [App\Http\Controllers\HomeController::class, 'storeUserAspiration'])
    ->name('storeUserAspiration');

Route::get('/submission/{slug}', [App\Http\Controllers\SubmissionController::class, 'index'])
    ->name('submission');
Route::post('/submission/{slug}/store', [App\Http\Controllers\SubmissionController::class, 'store'])
    ->name('submission-store');
Route::get('/edit-submission/edit/{id}', [App\Http\Controllers\SubmissionController::class, 'editSubmission'])
    ->name('editSubmission');
Route::put('/edit-submission/update/{transaction}', [App\Http\Controllers\SubmissionController::class, 'update'])
    ->name('update-submission');
Route::get('/success-submission', [App\Http\Controllers\SubmissionController::class, 'successSubmission'])
    ->name('successSubmission');

Auth::routes(['verify' => true]);
Route::get('/register/success', [App\Http\Controllers\Auth\RegisterController::class, 'successRegister'])
    ->name('successRegister');

// Pemohon
Route::prefix('dashboard/applicant')
    ->namespace('Applicant')
    ->middleware(['auth', 'checkRole:applicant'])
    ->group(function() {
        Route::get('/', [\App\Http\Controllers\Applicant\DashboardController::class, 'index'])
            ->name('dashboardApplicant');

        Route::get('/applicant-notification', [\App\Http\Controllers\Applicant\ApplicantNotification::class, 'index'])
            ->name('applicantNotification');

        // Pengajuan Izin Masuk Kawasan
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

        // Pembayaran Retribusi
        Route::get('/payment', [\App\Http\Controllers\Applicant\DashboardPaymentController::class, 'index'])
            ->name('dashboardPayment');
        Route::get('/payment/payment-process/{id}', [\App\Http\Controllers\Applicant\DashboardPaymentController::class , 'paymentProcess'])
            ->name('paymentProcess');
        Route::put('/payment/payment-process/pay/{id}', [\App\Http\Controllers\Applicant\DashboardPaymentController::class , 'paymentProcessCheckout'])
            ->name('paymentProcessCheckout');
        Route::get('/payment/status/paid/{id}', [\App\Http\Controllers\Applicant\DashboardPaymentController::class , 'paymentPaidOff'])
            ->name('paymentPaidOff');
        Route::get('/payment/status/failed/{id}', [\App\Http\Controllers\Applicant\DashboardPaymentController::class , 'paymentFailed'])
            ->name('paymentFailed');

        Route::get('/area-entry', [\App\Http\Controllers\Applicant\AreaEntryController::class, 'index'])
            ->name('areaEntryPermit');

        Route::get('/profile', [\App\Http\Controllers\Applicant\SettingApplicantController::class, 'edit'])
            ->name('settingAccountApplicant');
        Route::put('/profile/update', [\App\Http\Controllers\Applicant\SettingApplicantController::class, 'update'])
            ->name('updateAccountApplicant');

        Route::get('/change-password', [\App\Http\Controllers\Applicant\DashboardEditPasswordController::class, 'edit'])
            ->name('settingPasswordApplicant');
        Route::put('/change-password/update', [\App\Http\Controllers\Applicant\DashboardEditPasswordController::class, 'update'])
            ->name('updatePasswordApplicant');
    }
);

// Super Admin
Route::prefix('dashboard/admin')
    ->name('Admin')
    ->middleware(['auth', 'checkRole:superadmin'])
    ->group(function() {
        Route::get('/', [\App\Http\Controllers\Admin\DashboardAdminController::class, 'index'])
            ->name('dashboardAdmin');

        Route::resource('/manage-conservation-area', DashboardConservsuationAreaController::class);

        Route::resource('/manage-gallery', DashboardConservationAreaGalleryController::class);

        Route::resource('/manage-news', DashboardNewsController::class);

        Route::resource('/manage-event', DashboardEventController::class);

        Route::resource('/destination-entry', DashboardDestinationEntryController::class);

        Route::resource('/entrance-fee', DashboardEntranceFeeController::class);

        Route::resource('/visitor-equipment', DashboardVisitorEquipmentController::class);

        Route::resource('/manage-user', DashboardManageUserController::class);

        Route::resource('/manage-downloader', DashboardManageDownloadController::class);

        // Pengajuan Izin Masuk Kawasan
        Route::get('/manage-submission', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'index'])
            ->name('manageSubmission');
        Route::get('/manage-submission/{id}/change-status', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'changeSubmissionStatus'])
            ->name('changeSubmissionStatus');
        Route::put('/manage-submission/{id}/update-status', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'updateSubmissionStatus'])
            ->name('updateSubmissionStatus');
        Route::get('/manage-submission/status/approved/{id}', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'submissionStatusApproved'])
            ->name('submissionStatusApproved');
        Route::get('/manage-submission/status/rejected/{id}', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'submissionStatusRejected'])
            ->name('submissionStatusRejected');
        Route::get('/manage-submission/status/failed/{id}', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'submissionStatusFailed'])
            ->name('submissionStatusFailed');
        Route::delete('/manage-submission/{id}/delete-submission', [\App\Http\Controllers\Admin\DashboardManageSubmissionController::class, 'deleteSubmission'])
            ->name('deleteSubmission');

        // Pembayaran Retribusi
        Route::get('/manage-transaction', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'index'])
            ->name('manageTransaction');
        Route::get('/manage-transaction/{id}/change-status', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'changeTransactionStatus'])
            ->name('changeTransactionStatus');
        Route::put('/manage-transaction/{id}/update-status', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'updateTransactionStatus'])
            ->name('updateTransactionStatus');
        Route::get('/manage-transaction/status/paid-off/{id}', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'transactionStatusPaidOff'])
            ->name('transactionStatusPaidOff');
        Route::get('/manage-transaction/status/failed/{id}', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'transactionStatusFailed'])
            ->name('transactionStatusFailed');
        Route::delete('/manage-transaction/{id}/delete-transaction', [\App\Http\Controllers\Admin\DashboardManageTransactionController::class, 'deleteTransaction'])
            ->name('deleteTransaction');

        // Kelola Surat Izin Masuk
        Route::get('/manage-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'index'])
            ->name('manageEntryPermit');
        Route::get('/manage-entry-permit/{id}/upload-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'uploadEntryPermit'])
            ->name('uploadEntryPermit');
        Route::put('/manage-entry-permit/{id}/store-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'storeEntryPermit'])
            ->name('storeEntryPermit');
        Route::get('/manage-entry-permit/{id}/detail-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'detailEntryPermit'])
            ->name('detailEntryPermit');
        Route::get('/manage-entry-permit/{id}/edit-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'editEntryPermit'])
            ->name('editEntryPermit');
        Route::put('/manage-entry-permit/{id}/upload-edit-entry-permit', [\App\Http\Controllers\Admin\DashboardManageEntryPermitController::class, 'uploadEditPermit'])
            ->name('uploadEditPermit');

        // Surat Izin Masuk
        Route::get('/entry-permit', [\App\Http\Controllers\Admin\DashboardEntryPermitController::class, 'index'])
            ->name('entryPermit');

        Route::get('/user-aspiration', [\App\Http\Controllers\Admin\DashboardUserAspirationController::class, 'index'])
            ->name('userAspirationAdmin');
        Route::get('/user-aspiration/{id}/detail', [\App\Http\Controllers\Admin\DashboardUserAspirationController::class, 'detail'])
            ->name('userAspirationDetailAdmin');

        Route::get('/visitor-control', [\App\Http\Controllers\Admin\DashboardVisitorControlController::class, 'index'])
            ->name('visitorControlAdmin');
        Route::get('/visitor-control/{id}/detail', [\App\Http\Controllers\Admin\DashboardVisitorControlController::class, 'show'])
            ->name('detailVisitorControlAdmin');

        Route::get('/profile', [\App\Http\Controllers\Admin\DashboardSettingAdminController::class, 'edit'])
            ->name('settingAccountAdmin');
        Route::put('/profile/update', [\App\Http\Controllers\Admin\DashboardSettingAdminController::class, 'update'])
            ->name('updateAccountAdmin');

        Route::get('/change-password', [\App\Http\Controllers\Admin\DashboardEditPasswordController::class, 'edit'])
            ->name('settingPasswordAdmin');
        Route::put('/change-password/update', [\App\Http\Controllers\Admin\DashboardEditPasswordController::class, 'update'])
            ->name('updatePasswordAdmin');

        Route::get('/admin-notification', [\App\Http\Controllers\Admin\AdminNotification::class, 'index'])
            ->name('adminNotification');
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
        Route::get('/submission/export/{id}', [\App\Http\Controllers\Leader\DashboardSubmissionController::class, 'exportSubmission'])
            ->name('exportSubmission');

        Route::get('/payment', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'index'])
            ->name('dashboardLeaderPayment');
        Route::get('/payment/status/pending/{id}', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'paymentPending'])
            ->name('dashboardLeaderPaymentPending');
        Route::get('/payment/status/paid/{id}', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'paymentPaid'])
            ->name('dashboardLeaderPaymentPaid');
        Route::get('/payment/status/failed/{id}', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'paymentFailed'])
            ->name('dashboardLeaderPaymentFailed');
        Route::get('/payment/export/{id}', [\App\Http\Controllers\Leader\DashboardPaymentController::class, 'exportPayment'])
            ->name('exportPayment');

        Route::get('/area-entry', [\App\Http\Controllers\Leader\DashboardAreaEntryController::class, 'index'])
            ->name('areaEntryLeader');

        Route::get('/monthly-submission', [\App\Http\Controllers\Leader\DashboardMonthlySubmissionController::class, 'index'])
            ->name('monthlySubmissionSummary');
        Route::get('/print-submission-summary/{dateStart}/{dateEnd}', [\App\Http\Controllers\Leader\DashboardMonthlySubmissionController::class, 'printSubmissionSummary'])
            ->name('printSubmission');

        Route::get('/user-aspiration', [\App\Http\Controllers\Leader\DashboardUserAspirationController::class, 'index'])
            ->name('userAspirationLeader');
        Route::get('/user-aspiration/{id}/detail', [\App\Http\Controllers\Leader\DashboardUserAspirationController::class, 'detail'])
            ->name('userAspirationLeaderDetail');

        Route::get('/leader-visitor-control', [\App\Http\Controllers\Leader\DashboardVisitorControlController::class, 'index'])
            ->name('leaderVisitorControl');
        Route::get('/leader-visitor-control/{id}/detail', [\App\Http\Controllers\Leader\DashboardVisitorControlController::class, 'show'])
            ->name('leaderDetailVisitorControl');

        Route::get('/profile', [\App\Http\Controllers\Leader\DashboardSettingLeaderController::class, 'edit'])
            ->name('settingAccountLeader');
        Route::put('/profile/update', [\App\Http\Controllers\Leader\DashboardSettingLeaderController::class, 'update'])
            ->name('updateAccountLeader');

        Route::get('/change-password', [\App\Http\Controllers\Leader\DashboardEditPasswordController::class, 'edit'])
            ->name('settingPasswordLeader');
        Route::put('/change-password/update', [\App\Http\Controllers\Leader\DashboardEditPasswordController::class, 'update'])
            ->name('updatePasswordLeader');

        Route::get('/leader-notification', [\App\Http\Controllers\Leader\LeaderNotification::class, 'index'])
            ->name('leaderNotification');
    }
);

// Admin Lapangan
Route::prefix('dashboard/fieldAdmin')
    ->namespace('FieldAdmin')
    ->middleware(['auth', 'checkRole:fieldadmin'])
    ->group(function() {
        Route::get('/visit', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'index'])
            ->name('dashboardFieldAdmin');

        Route::get('/visit/detail-visit/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'detailVisit'])
            ->name('detailVisit');
        Route::get('/visit/add-entry/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'addEntry'])
            ->name('addEntry');
        Route::put('/visit/store-entry/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'storeEntry'])
            ->name('storeEntry');
        Route::get('/visit/add-exit/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'addExit'])
            ->name('addExit');
        Route::put('/visit/store-exit/{id}', [\App\Http\Controllers\FieldAdmin\DashboardController::class, 'storeExit'])
            ->name('storeExit');

        Route::get('/data-visitor-checkout', [\App\Http\Controllers\FieldAdmin\VisitorCheckoutController::class, 'index'])
            ->name('visitorCheckout');
        Route::get('/data-visitor-checkout/{id}/detail', [\App\Http\Controllers\FieldAdmin\VisitorCheckoutController::class, 'show'])
            ->name('showVisitorCheckout');

        Route::get('/profile', [\App\Http\Controllers\FieldAdmin\SettingFieldAdminController::class, 'edit'])
            ->name('settingAccountFieldAdmin');
        Route::put('/profile/update', [\App\Http\Controllers\FieldAdmin\SettingFieldAdminController::class, 'update'])
            ->name('updateAccountFieldAdmin');

        Route::get('/change-password', [\App\Http\Controllers\FieldAdmin\DashboardEditPasswordController::class, 'edit'])
            ->name('settingPasswordFieldAdmin');
        Route::put('/change-password/update', [\App\Http\Controllers\FieldAdmin\DashboardEditPasswordController::class, 'update'])
            ->name('updatePasswordFieldAdmin');
    }
);
