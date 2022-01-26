<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardAreaEntryController extends Controller
{
    public function index()
    {
        $dataEntries = Transaction::with(['user'])->whereNotNull('entrance_ticket')->latest()->paginate(10);
        return view('pages.leader.dashboard-area-entry', compact('dataEntries'));
    }
}
