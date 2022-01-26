<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TransactionEquipmentDetail;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class DashboardPaymentController extends Controller
{
    public function index()
    {
        $paymentPending = Transaction::with(['user'])->where("payment_status", "PENDING")->latest()->paginate(5);
        $paymentPaid = Transaction::with(['user'])->where("payment_status", "PAIDOFF")->latest()->paginate(5);
        $paymentFailed = Transaction::with(['user'])->where("payment_status", "FAILED")->latest()->paginate(5);
        return view('pages.leader.dashboard-payment', compact([
            'paymentPending', 'paymentPaid', 'paymentFailed'
        ]));
    }

    public function paymentPending($id)
    {   
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.leader.dashboard-payment-pending', compact([
            'data', 'details', 'equipments'
        ]));
    }

    public function paymentPaid($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.leader.dashboard-payment-paid', compact([
            'data', 'details', 'equipments'
        ]));
    }

    public function paymentFailed($id)
    {
        $data = Transaction::with(['conservation_area', 'purpose', 'user'])->findOrFail($id);
        $details = TransactionDetail::where('transaction_id', $id)->get();
        $equipments = TransactionEquipmentDetail::where('transaction_id', $id)->get();
        return view('pages.leader.dashboard-payment-failed', compact([
            'data', 'details', 'equipments'
        ]));
    }

    public function exportPayment($id)
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
        $pdf = PDF::loadview('pages.leader.data-payment-pdf')->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('Data Pembayaran ' . $name . '.pdf');
    }
}
