<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardManageTransactionController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.transaction.dashboard-manage-transaction');
    }

    public function changeTransactionStatus($id)
    {
        return view('pages.superAdmin.transaction.dashboard-change-transaction-status');
    }

    public function transactionStatusPaidOff($id)
    {
        return view('pages.superAdmin.transaction.dashboard-transaction-status-paid-off');
    }

    public function transactionStatusFailed($id)
    {
        return view('pages.superAdmin.transaction.dashboard-transaction-status-failed');
    }
}
