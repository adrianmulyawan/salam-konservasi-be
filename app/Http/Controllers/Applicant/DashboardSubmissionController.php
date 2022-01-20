<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardSubmissionController extends Controller
{
    // Menampilkan Pengajuan
    public function index()
    {
        $submissionPending = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'PENDING')->latest()->paginate(5);
        $submissionAllowed = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->latest()->paginate(5);
        $submissionRejected = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'REJECTED')->latest()->paginate(5);
        $submissionFailed = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'FAILED')->latest()->paginate(5);
        
        return view('pages.applicant.dashboard-submission', compact([
            'submissionPending', 'submissionAllowed', 'submissionRejected', 'submissionFailed'
        ]));
    }

    // Detail Pengajuan Pending
    public function submissionPending($id) 
    {
        $item = Transaction::with(['user', 'conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.applicant.dashboard-submission-pending', compact([
            'item', 'details', 'equipments'
        ]));
    }

    // Detail Pengajuan Disetujui
    public function submissionApproved($id) 
    {
        return view('pages.applicant.dashboard-submission-approved');
    }

    // Detail Pengajuan Ditolak
    public function submissionRejected($id)
    {
        return view('pages.applicant.dashboard-submission-rejected');
    }

    // Detail Pengajuan Gagal
    public function submissionFailed($id)
    {
        return view('pages.applicant.dashboard-submission-failed');
    }
}
