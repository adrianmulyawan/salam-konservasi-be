<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardManageTransactionController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.dashboard-manage-transaction');
    }

    public function changeTransactionStatus()
    {
        return view('pages.superAdmin.dashboard-change-transaction-status');
    }

    public function transactionStatusPaidOff()
    {
        return view('pages.superAdmin.dashboard-transaction-status-paid-off');
    }

    public function transactionStatusFailed()
    {
        return view('pages.superAdmin.dashboard-transaction-status-failed');
    }
}
