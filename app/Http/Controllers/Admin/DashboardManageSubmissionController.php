<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardManageSubmissionController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.submission.dashboard-manage-submission');
    }

    public function changeSubmissionStatus($id)
    {
        return view('pages.superAdmin.submission.dashboard-change-submission-status');
    }

    public function submissionStatusApproved($id)
    {
        return view('pages.superAdmin.submission.dashboard-submission-status-approved');
    }

    public function submissionStatusRejected($id)
    {
        return view('pages.superAdmin.submission.dashboard-submission-status-rejected');
    }

    public function submissionStatusFailed($id)
    {
        return view('pages.superAdmin.dashboard-submission-status-failed');
    }
}
