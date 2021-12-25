<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardPaymentController extends Controller
{
    public function index ()
    {
        return view('pages.applicant.dashboard-payment');
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
