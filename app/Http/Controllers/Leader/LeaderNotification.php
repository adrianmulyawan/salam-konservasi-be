<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Transaction;

class LeaderNotification extends Controller
{
    public function index()
    {
        $allSubmissions = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'PENDING')->latest()->limit(3)->get();
        $notifAlloweds = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'ALLOWED')->latest()->limit(3)->get();
        $notifRejecteds = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'REJECTED')->latest()->limit(3)->get();
        $notifFaileds = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'FAILED')->latest()->limit(3)->get();
        
        $allPayments = Transaction::with(['conservation_area', 'user'])->where('payment_status', 'PENDING')->latest()->limit(3)->get();
        $paymentPaidOff = Transaction::with(['conservation_area', 'user'])->where('payment_status', 'PAIDOFF')->latest()->limit(3)->get();
        $paymentFailed = Transaction::with(['conservation_area', 'user'])->where('payment_status', 'FAILED')->latest()->limit(3)->get();
        
        $tickets = Transaction::with(['conservation_area', 'user'])->whereNotNull('entrance_ticket')->latest()->limit(3)->get();
        
        return view('pages.leader.notif', compact([
            'allSubmissions', 'notifAlloweds', 'notifRejecteds', 'notifFaileds', 'allPayments', 'paymentPaidOff', 'paymentFailed', 'tickets'
        ]));
    }
}
