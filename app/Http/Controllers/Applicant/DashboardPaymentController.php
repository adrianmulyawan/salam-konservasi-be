<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardPaymentController extends Controller
{
    public function index ()
    {
        $paymentUnpaid = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->where('payment_status', 'UNPAID')->latest()->paginate(5);
        $paymentPaidOff = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->where('payment_status', 'PENDING')->orWhere('payment_status', 'PAIDOFF')->latest()->paginate(5);
        $paymentFailed = Transaction::with(['conservation_area', 'purpose'])->where('user_id', Auth::user()->id)->where('payment_status', 'FAILED')->latest()->paginate(5);

        return view('pages.applicant.dashboard-payment', compact([
            'paymentUnpaid', 'paymentPaidOff', 'paymentFailed'
        ]));
    }

    public function paymentProcess($id)
    {
        $data = Transaction::where('user_id', Auth::user()->id)->findOrFail($id);
        return view('pages.applicant.dashboard-payment-process', compact('data'));
    }

    public function paymentProcessCheckout(Request $request, $id)
    {
        $request->validate([
            'account_owner' => 'required|max:255',
            'evidence_of_transfer' => 'required|image|mimes:png,jpg,jpeg,webp|max:2048'
        ]);

        $item = Transaction::findOrFail($id);
        $item->account_owner = $request->account_owner;
        $item->evidence_of_transfer = $request->file('evidence_of_transfer')->store('assets/evidence_of_transfer', 'public');
        $item->payment_status = "PENDING";
        $item->save();

        if ($item) {
            session()->flash('success', 'Pembayaran Retribusi Berhasil Dilakukan');
            return redirect()->route('dashboardPayment');
        } else {
            session()->flash('failed', 'Pembayaran Retribusi Gagal Dilakukan');
            return redirect()->route('dashboardPayment');
        }
    }

    public function paymentPaidOff($id)
    {
        $item = Transaction::with(['conservation_area', 'user', 'purpose'])->where('user_id', Auth::user()->id)->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.applicant.dashboard-payment-paid', compact([
            'item', 'details', 'equipments'
        ]));
    }

    public function paymentFailed($id)
    {
        $item = Transaction::with(['conservation_area', 'user', 'purpose'])->where('user_id', Auth::user()->id)->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.applicant.dashboard-payment-failed', compact([
            'item', 'details', 'equipments'
        ]));
    }
}
