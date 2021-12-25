<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSubmissionController extends Controller
{
    // Menampilkan Pengajuan
    public function index()
    {
        return view('pages.applicant.dashboard-submission');
    }

    // Detail Pengajuan Pending
    public function submissionPending() 
    {
        return view('pages.applicant.dashboard-submission-pending');
    }

    // Detail Pengajuan Disetujui
    public function submissionApproved() 
    {
        return view('pages.applicant.dashboard-submission-approved');
    }

    // Detail Pengajuan Ditolak
    public function submissionRejected()
    {
        return view('pages.applicant.dashboard-submission-rejected');
    }

    // Detail Pengajuan Gagal
    public function submissionFailed()
    {
        return view('pages.applicant.dashboard-submission-failed');
    }
}
