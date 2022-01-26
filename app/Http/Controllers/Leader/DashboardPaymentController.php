<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardPaymentController extends Controller
{
    public function index()
    {
        $paymentPending = Transaction::with(['user'])->where("payment_status", "PENDING")->latest()->paginate(5);
        $paymentPaid = Transaction::with(['user'])->where("payment_status", "PAIDOFF")->latest()->paginate(5);
        $paymentFailed = Transaction::with(['user'])->where("payment_status", "FAILED")->latest()->paginate(5);
        return view('pages.leader.dashboard-payment', compact([
            'paymentPending', 'paymentPaid', 'paymentFailed'
        ]));
    }

    public function paymentPending($id)
    {
        return view('pages.leader.dashboard-payment-pending');
    }

    public function paymentPaid($id)
    {
        return view('pages.leader.dashboard-payment-paid');
    }

    public function paymentFailed($id)
    {
        return view('pages.leader.dashboard-payment-failed');
    }

    public function exportPayment($id)
    {

    }
}
