<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Card Atas
        $submissionTotal = Transaction::where('submission_status', 'PENDING')->orWhere('submission_status', 'ALLOWED')->orWhere('submission_status', 'REJECTED')->orWhere('submission_status', 'FAILED')->count();
        $submissionPending = Transaction::where('submission_status', 'PENDING')->count();
        $paymentPending = Transaction::where('submission_status', 'ALLOWED')->where('payment_status', 'PENDING')->count();
        // Card Tengah
        $submissionAllowed = Transaction::where('submission_status', 'ALLOWED')->count();
        $submissionRejected = Transaction::where('submission_status', 'REJECTED')->count();
        $submissionFailed = Transaction::where('submission_status', 'FAILED')->count();
        // Card Bawash
        $submissionTourism = Transaction::where('purpose_id', 1)->count();
        $submissionResearch = Transaction::where('purpose_id', 2)->count();
        $submissionEducation = Transaction::where('purpose_id', 3)->count();

        // Recent Submission
        $recentSubmission = Transaction::with(['conservation_area', 'purpose', 'user'])->latest()->limit(3)->get();

        // Recent Payment
        $recentTransaction = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'ALLOWED')->where('payment_status', 'PENDING')->latest()->limit(3)->get();
        
        $leaderNotif = Transaction::where('submission_status', 'PENDING')
                       ->orWhere('submission_status', 'ALLOWED')
                       ->orWhere('submission_status', 'REJECTED')
                       ->orWhere('submission_status', 'FAILED')
                       ->where('payment_status', 'PENDING')
                       ->orWhere('payment_status', 'PAIDOFF')
                       ->orWhere('payment_status', 'FAILED')
                       ->whereNotNull('entrance_ticket')
                       ->count();

        return view('pages.leader.dashboard', compact([
            'submissionTotal', 'submissionPending', 'paymentPending',
            'submissionAllowed', 'submissionRejected', 'submissionFailed',
            'submissionTourism', 'submissionResearch', 'submissionEducation',
            'recentSubmission', 'recentTransaction', 'leaderNotif'
        ]));
    }
}
