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
}
