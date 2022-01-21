<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AreaEntryController extends Controller
{
    public function index (Request $request)
    {   
        $areaEntryPermits = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('entrance_ticket', $request->entrance_ticket != null)->latest()->paginate(5);
        return view('pages.applicant.dashboard-entry', compact('areaEntryPermits'));
    }
}
