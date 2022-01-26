<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Barryvdh\DomPDF\Facade as PDF;

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

    public function submissionPending($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();

        return view('pages.leader.dashboard-submission-pending', compact([
            'data', 'userCount', 'details', 'equipments'
        ]));
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

    public function exportSubmission($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        $name = $data->user->name;
        view()->share('data', $data);
        view()->share('userCount', $userCount);
        view()->share('details', $details);
        view()->share('equipments', $equipments);
        $pdf = PDF::loadview('pages.leader.data-submission-pdf')->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Data Submission ' . $name . '.pdf');
    }
}
