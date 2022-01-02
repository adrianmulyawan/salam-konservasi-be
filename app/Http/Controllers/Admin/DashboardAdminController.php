<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConservationArea;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        $user = User::count();
        $conservationArea = ConservationArea::count();
        $submission = Transaction::where('submission_status')->count();
        $submissionPending = Transaction::where('submission_status', 'PENDING')->count();
        $submissionAllowed = Transaction::where('submission_status', 'ALLOWED')->count();
        $submissionRejected = Transaction::where('submission_status', 'REJECTED')->count();
        $submissionFailed = Transaction::where('submission_status', 'FAILED')->count();
        $retributionPayment = Transaction::where('payment_status')->count();
        $retributionUnpaid = Transaction::where('payment_status', 'UNPAID')->count();
        $retributionPending = Transaction::where('payment_status', 'PENDING')->count();
        $retributionPaidOff = Transaction::where('payment_status', 'PAIDOFF')->count();
        $retributionFailed = Transaction::where('payment_status', 'FAILED')->count();
        return view('pages.superAdmin.dashboard', [
            'user' => $user,
            'conservationArea' => $conservationArea,
            'submission' => $submission,
            'retributionPayment' => $retributionPayment,
            'submissionPending' => $submissionPending,
            'submissionAllowed' => $submissionAllowed,
            'submissionRejected' => $submissionRejected,
            'submissionFailed' => $submissionFailed,
            'retributionUnpaid' => $retributionUnpaid,
            'retributionPending' => $retributionPending,
            'retributionPaidOff' => $retributionPaidOff,
            'retributionFailed' => $retributionFailed,
        ]);
    }
}
