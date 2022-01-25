<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Http\Request;

class DashboardManageEntryPermitController extends Controller
{
    public function index()
    {
        $entryPermitPending = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'ALLOWED')->where('payment_status', 'PAIDOFF')->whereNull('entrance_ticket')->latest()->paginate(10);
        $entryPermitUpload = Transaction::with(['conservation_area', 'user'])->whereNotNull('entrance_ticket')->latest()->paginate(10);
        return view('pages.superAdmin.manageEntryPermit.dashboard-manage-entry-permit', compact([
            'entryPermitPending', 'entryPermitUpload'
        ]));
    }

    public function uploadEntryPermit($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.manageEntryPermit.dashboard-upload-entry-permit', compact([
            'data', 'details', 'equipments'
        ]));
    }

    public function storeEntryPermit(Request $request, $id)
    {
        $request->validate([
            'entrance_ticket' => 'required|mimes:pdf|max:5048'
        ]);

        $item = Transaction::findOrFail($id);
        $item->entrance_ticket = $request->file('entrance_ticket')->store('assets/entrance_ticket', 'public');
        $item->save();

        if ($item) {
            session()->flash('success', 'Surat Izin Masuk Kawasan Berhasil Diunggah');
            return redirect()->route('AdminmanageEntryPermit');
        } else {
            session()->flash('failed', 'Surat Izin Masuk Kawasan Gagal Diunggah');
            return redirect()->route('AdminmanageEntryPermit');
        }
    }

    public function detailEntryPermit($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.manageEntryPermit.dashboard-detail-entry-permit', compact([
            'data', 'details', 'equipments'
        ]));
    }

    public function editEntryPermit($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.superAdmin.manageEntryPermit.dashboard-edit-entry-permit', compact([
            'data', 'details', 'equipments'
        ]));
    }

    public function uploadEditPermit(Request $request, $id)
    {
        $request->validate([
            'entrance_ticket' => 'required|mimes:pdf|max:5048'
        ]);

        $item = Transaction::findOrFail($id);
        $item->entrance_ticket = $request->file('entrance_ticket')->store('assets/entrance_ticket', 'public');
        $item->save();

        if ($item) {
            session()->flash('success', 'Surat Izin Masuk Kawasan Berhasil Dirubah');
            return redirect()->route('AdminmanageEntryPermit');
        } else {
            session()->flash('failed', 'Surat Izin Masuk Kawasan Gagal Dirubah');
            return redirect()->route('AdminmanageEntryPermit');
        }
    }
}
