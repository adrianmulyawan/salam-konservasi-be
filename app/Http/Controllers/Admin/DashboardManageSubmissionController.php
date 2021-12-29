<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardManageSubmissionController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.dashboard-manage-submission');
    }

    public function changeSubmissionStatus()
    {
        return view('pages.superAdmin.dashboard-change-submission-status');
    }

    public function submissionStatusApproved()
    {
        return view('pages.superAdmin.dashboard-submission-status-approved');
    }

    public function submissionStatusRejected()
    {
        return view('pages.superAdmin.dashboard-submission-status-rejected');
    }

    public function submissionStatusFailed()
    {
        return view('pages.superAdmin.dashboard-submission-status-failed');
    }
}
