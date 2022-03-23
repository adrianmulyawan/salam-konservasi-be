<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Http\Request;

class DashboardMonthlySubmissionController extends Controller
{
    public function index()
    {
        return view('pages.leader.dashboard-monthly-submission');
    }

    public function printSubmissionSummary($dateStart, $dateEnd)
    {
        $datas = Transaction::with(['conservation_area', 'purpose', 'user'])->whereBetween('date_of_entry', [$dateStart, $dateEnd])->get();

        return view('pages.leader.data-submission-summary-pdf', compact([
            'datas',
        ]));
    }
}
