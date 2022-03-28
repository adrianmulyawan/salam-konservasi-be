<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $totalSubmission = Transaction::where('user_id', Auth::user()->id)->count();
        $totalPayment = Transaction::where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->where('payment_status', 'UNPAID')->count();

        $submissionPending = Transaction::where('user_id', Auth::user()->id)->where('submission_status', 'PENDING')->count();
        $submissionApproved = Transaction::where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->count();
        $submissionRejected = Transaction::where('user_id', Auth::user()->id)->where('submission_status', 'REJECTED')->count();
        $submissionFailed = Transaction::where('user_id', Auth::user()->id)->where('submission_status', 'FAILED')->count();

        $paymentUnpaid = Transaction::where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->where('payment_status', 'UNPAID')->count();
        $paymentPending = Transaction::where('user_id', Auth::user()->id)->where('payment_status', 'PENDING')->count();
        $paymentPaid = Transaction::where('user_id', Auth::user()->id)->where('payment_status', 'PAIDOFF')->count();
        $paymentFailed = Transaction::where('user_id', Auth::user()->id)->where('payment_status', 'FAILED')->count();

        $recentSubmission = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->limit(3)->latest()->get();
        $recentTransaction = Transaction::where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->where('payment_status', 'UNPAID')->limit(3)->latest()->get();

        $applicantNotif = Transaction::where('user_id', Auth::user()->id)->count();

        return view('pages.applicant.dashboard', compact([
            'totalSubmission', 'totalPayment', 'submissionPending', 'submissionApproved', 'submissionRejected', 
            'submissionFailed', 'paymentUnpaid', 'paymentPending', 'paymentPaid', 'paymentFailed',
            'recentSubmission', 'recentTransaction', 'applicantNotif'
        ]));
    }
}
