<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardEntryPermitController extends Controller
{
    public function index()
    {
        $dataEntries = Transaction::with(['user'])->whereNotNull('entrance_ticket')->latest()->paginate(10);
        return view('pages.superAdmin.entryPermit.dashboard-entry-permit', compact('dataEntries'));
    }
}
