<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplicantNotification extends Controller
{
    public function index()
    {
        $notifPendings = Transaction::with(['conservation_area'])->where('user_id', Auth::user()->id)->where('submission_status', 'PENDING')->latest()->limit(3)->get();
        $notifAlloweds = Transaction::with(['conservation_area'])->where('user_id', Auth::user()->id)->where('submission_status', 'ALLOWED')->latest()->limit(3)->get();
        $notifRejecteds = Transaction::with(['conservation_area'])->where('user_id', Auth::user()->id)->where('submission_status', 'REJECTED')->latest()->limit(3)->get();
        $notifFaileds = Transaction::with(['conservation_area'])->where('user_id', Auth::user()->id)->where('submission_status', 'FAILED')->latest()->limit(3)->get();
        
        $paymentPaidOff = Transaction::with(['conservation_area'])->where('user_id', Auth::user()->id)->where('payment_status', 'PAIDOFF')->latest()->limit(3)->get();
        $paymentFailed = Transaction::with(['conservation_area'])->where('user_id', Auth::user()->id)->where('payment_status', 'FAILED')->latest()->limit(3)->get();
        
        $tickets = Transaction::with(['conservation_area'])->where('user_id', Auth::user()->id)->whereNotNull('entrance_ticket')->latest()->limit(3)->get();
        
        return view('pages.applicant.notif', compact([
            'notifPendings', 'notifAlloweds', 'notifRejecteds', 'notifFaileds', 'paymentPaidOff', 'paymentFailed', 'tickets'
        ]));
    }
}
