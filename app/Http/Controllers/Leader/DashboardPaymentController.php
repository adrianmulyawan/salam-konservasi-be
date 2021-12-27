<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPaymentController extends Controller
{
    public function index()
    {
        return view('pages.leader.dashboard-payment');
    }

    public function paymentPending()
    {
        return view('pages.leader.dashboard-payment-pending');
    }

    public function paymentPaid()
    {
        return view('pages.leader.dashboard-payment-paid');
    }

    public function paymentFailed()
    {
        return view('pages.leader.dashboard-payment-failed');
    }
}
