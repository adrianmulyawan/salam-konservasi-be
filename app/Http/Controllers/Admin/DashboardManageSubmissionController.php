<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Http\Request;

class DashboardManageSubmissionController extends Controller
{
    public function index()
    {
        $submissionPendings = Transaction::with(['conservation_area', 'user', 'purpose'])->orderBy('created_at', 'ASC')->where('submission_status', 'PENDING')->paginate(5);
        $submissionApproved = Transaction::with(['conservation_area', 'user', 'purpose'])->orderBy('created_at', 'ASC')->where('submission_status', 'ALLOWED')->paginate(5);
        $submissionRejected = Transaction::with(['conservation_area', 'user', 'purpose'])->orderBy('created_at', 'ASC')->where('submission_status', 'REJECTED')->paginate(5);
        $submissionFailed = Transaction::with(['conservation_area', 'user', 'purpose'])->orderBy('created_at', 'ASC')->where('submission_status', 'FAILED')->paginate(5);

        return view('pages.superAdmin.submission.dashboard-manage-submission', compact([
            'submissionPendings', 'submissionApproved', 'submissionRejected', 'submissionFailed'
        ]));
    }

    public function changeSubmissionStatus($id)
    {
        $data = Transaction::with(['conservation_area', 'user', 'purpose'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.submission.dashboard-change-submission-status', compact([
            'data', 'userCount', 'details', 'equipments'
        ]));
    }

    public function updateSubmissionStatus(Request $request, $id)
    {
        $request->validate([
            'submission_status' => 'required'
        ]);

        $item = Transaction::findOrFail($id);
        $item->submission_status = $request->submission_status;
        $item->rejected_reason = $request->rejected_reason;
        $item->save();

        if ($item) {
            session()->flash('success', 'Data Pengajuan Izin Masuk Kawasan Berhasil Diubah');
            return redirect()->route('AdminmanageSubmission');
        } else {
            session()->flash('failed', 'Data Pengajuan Izin Masuk Kawasan Gagal Diubah');
            return redirect()->route('AdminmanageSubmission');
        }
    }

    public function submissionStatusApproved($id)
    {
        $item = Transaction::with(['conservation_area', 'user', 'purpose'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.submission.dashboard-submission-status-approved', compact(['item', 'userCount', 'details', 'equipments']));
    }

    public function submissionStatusRejected($id)
    {
        $item = Transaction::with(['conservation_area', 'user', 'purpose'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.submission.dashboard-submission-status-rejected', compact(['item', 'userCount', 'details', 'equipments']));
    }

    public function submissionStatusFailed($id)
    {
        $item = Transaction::with(['conservation_area', 'user', 'purpose'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.submission.dashboard-submission-status-failed', compact(['item', 'userCount', 'details', 'equipments']));
    }

    public function deleteSubmission($id)
    {
        $transaction_detail = TransactionDetail::where('transaction_id', $id)->delete();
        $transaction_equipment = TransactionEquipmentDetail::where('transaction_id', $id)->delete();
        $data = Transaction::firstOrFail('id', $id)->delete();

        if ($data) {
            session()->flash('success', 'Data Pengajuan Berhasil Dihapus');
            return redirect()->route('AdminmanageSubmission');
        } else {
            session()->flash('failed', 'Data Pengajuan Gagal Dihapus');
            return redirect()->route('AdminmanageSubmission');
        }
    }
}
