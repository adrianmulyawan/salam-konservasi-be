<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DashboardPaymentController extends Controller
{
    public function index ()
    {
        $paymentUnpaid = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->where('payment_status', 'UNPAID')->latest()->paginate(5);
        $paymentPaidOff = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->where('payment_status', 'PENDING')->where('payment_status', 'PAIDOFF')->latest()->paginate(5);
        $paymentFailed = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'FAILED')->where('payment_status', 'FAILED')->latest()->paginate(5);

        return view('pages.applicant.dashboard-payment', compact([
            'paymentUnpaid', 'paymentPaidOff', 'paymentFailed'
        ]));
    }

    public function paymentProcess()
    {
        return view('pages.applicant.dashboard-payment-process');
    }

    public function paymentPaidOff()
    {
        return view('pages.applicant.dashboard-payment-paid');
    }

    public function paymentFailed()
    {
        return view('pages.applicant.dashboard-payment-failed');
    }
}
