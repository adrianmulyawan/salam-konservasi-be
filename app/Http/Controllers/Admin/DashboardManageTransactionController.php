<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Http\Request;

class DashboardManageTransactionController extends Controller
{
    public function index()
    {
        $transactionPending = Transaction::with(['user'])->where('payment_status', 'PENDING')->latest()->paginate(10);
        $transactionPaidOff = Transaction::with(['user'])->where('payment_status', 'PAIDOFF')->latest()->paginate(10);
        $transactionFailed = Transaction::with(['user'])->where('payment_status', 'FAILED')->latest()->paginate(10);
        return view('pages.superAdmin.transaction.dashboard-manage-transaction', compact([
            'transactionPending', 'transactionPaidOff', 'transactionFailed'
        ]));
    }

    public function changeTransactionStatus($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.transaction.dashboard-change-transaction-status', compact([
            'data', 'details', 'equipments'
        ]));
    }

    public function updateTransactionStatus(Request $request, $id)
    {
        $request->validate([
            'payment_status' => 'required'
        ]);

        $item = Transaction::findOrFail($id);
        $item->payment_status = $request->payment_status;
        $item->save();

        if ($item) {
            session()->flash('success', 'Data Pembayaran Retribusi Berhasil Diubah');
            return redirect()->route('AdminmanageTransaction');
        } else {
            session()->flash('failed', 'Data Pembayaran Retribusi Gagal Diubah');
            return redirect()->route('AdminmanageTransaction');
        }
    }

    public function transactionStatusPaidOff($id)
    {
        $item = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        $totalUser = TransactionDetail::where('transaction_id', $id)->count();
        return view('pages.superAdmin.transaction.dashboard-transaction-status-paid-off', compact([
            'item', 'details', 'equipments', 'totalUser'
        ]));
    }

    public function transactionStatusFailed($id)
    {
        return view('pages.superAdmin.transaction.dashboard-transaction-status-failed');
    }


    public function deleteTransaction($id)
    {
        $transaction_detail = TransactionDetail::where('transaction_id', $id)->delete();
        $transaction_equipment = TransactionEquipmentDetail::where('transaction_id', $id)->delete();
        $data = Transaction::firstOrFail('id', $id)->delete();

        if ($data) {
            session()->flash('success', 'Data Pengajuan Berhasil Dihapus');
            return redirect()->route('AdminmanageTransaction');
        } else {
            session()->flash('failed', 'Data Pengajuan Gagal Dihapus');
            return redirect()->route('AdminmanageTransaction');
        }
    }
}
