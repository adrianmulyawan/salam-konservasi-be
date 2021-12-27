<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSubmissionController extends Controller
{
    public function index()
    {
        return view('pages.leader.dashboard-submission');
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
