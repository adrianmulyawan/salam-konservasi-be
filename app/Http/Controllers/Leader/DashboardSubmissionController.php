<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardSubmissionController extends Controller
{
    public function index()
    {
        $submissionPending = Transaction::with(['conservation_area', 'purpose', 'user'])->where('submission_status', 'PENDING')->latest()->paginate(10);
        $submissionApproved = Transaction::with(['conservation_area', 'purpose', 'user'])->where('submission_status', 'ALLOWED')->latest()->paginate(10);
        $submissionRejected = Transaction::with(['conservation_area', 'purpose', 'user'])->where('submission_status', 'REJECTED')->latest()->paginate(10);
        $submissionFailed = Transaction::with(['conservation_area', 'purpose', 'user'])->where('submission_status', 'FAILED')->latest()->paginate(10);
        return view('pages.leader.dashboard-submission', compact([
            'submissionPending', 'submissionApproved', 'submissionRejected', 'submissionFailed'
        ]));
    }

    public function submissionPending()
    {
        return view('pages.leader.dashboard-submission-pending');
    }

    public function submissionApproved()
    {
        return view('pages.leader.dashboard-submission-approved');
    }

    public function submissionRejected()
    {
        return view('pages.leader.dashboard-submission-rejected');
    }

    public function submissionFailed()
    {
        return view('pages.leader.dashboard-submission-failed');
    }
}
