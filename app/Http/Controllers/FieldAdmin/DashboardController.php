<?php

namespace App\Http\Controllers\FieldAdmin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use App\Models\VisitorControl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $visitorDatas = Transaction::with(['user', 'conservation_area', 'purpose'])->where('submission_status', 'ALLOWED')->where('payment_status', 'PAIDOFF')->whereNotNull('entrance_ticket')->latest()->paginate(10);
        return view('pages.fieldAdmin.dashboard', compact('visitorDatas'));
    }

    public function detailVisit($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user', 'visitor_control'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        $visitor = VisitorControl::with(['transaction'])->where('transaction_id', $id)->get();
        return view('pages.fieldAdmin.dashboard-visit-details', compact([
            'data', 'userCount', 'details', 'equipments', 'visitor'
        ]));
    }

    public function addEntry($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user', 'visitor_control'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.fieldAdmin.dashboard-add-entry-area', compact([
            'data', 'userCount', 'details', 'equipments'
        ]));
    }

    public function storeEntry(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);

        $data = new VisitorControl();
        $data['transaction_id'] = $transaction->id;
        $data['user_id'] = Auth::user()->id;
        $data['name'] = Auth::user()->name;
        $data['transaction_code'] = $transaction->transaction_code;
        $data['date_of_entry_area'] = date('Y-m-d', strtotime($request->date_of_entry_area));
        $data->save();

        if ($data) {
            session()->flash('success', 'Data Masuk Pengunjung Berhasil Ditambahkan');
            return redirect()->route('dashboardFieldAdmin');
        } else {
            session()->flash('failed', 'Data Masuk Pengunjung Gagal Ditambahkan');
            return redirect()->route('dashboardFieldAdmin');
        }
    }

    public function addExit($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user', 'visitor_control'])->findOrFail($id);
        $userCount = TransactionDetail::where('transaction_id', $id)->count();
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.fieldAdmin.dashboard-add-exit-area', compact([
            'data', 'userCount', 'details', 'equipments'
        ]));
    }

    public function storeExit(Request $request, $id)
    {
        $data = VisitorControl::where('transaction_id', $id)->update([
            'user_id'       => Auth::user()->id,
            'name'          => Auth::user()->name,
            'out_date_area' => date('Y-m-d', strtotime($request->out_date_area))
        ]);

        if ($data) {
            session()->flash('success', 'Data Keluar Pengunjung Berhasil Ditambahkan');
            return redirect()->route('dashboardFieldAdmin');
        } else {
            session()->flash('failed', 'Data Keluar Pengunjung Gagal Ditambahkan');
            return redirect()->route('dashboardFieldAdmin');
        }
    }
}
