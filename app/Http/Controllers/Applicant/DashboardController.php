<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        $totalSubmission = Transaction::with(['user'])->where('user_id', Auth::user()->id)->count();
        return view('pages.applicant.dashboard', compact([
            'totalSubmission'
        ]));
    }
}
