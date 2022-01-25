<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaEntryController extends Controller
{
    public function index ()
    {   
        $areaEntryPermits = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->whereNotNull('entrance_ticket')->latest()->paginate(10);
        return view('pages.applicant.dashboard-entry', compact('areaEntryPermits'));
    }
}
