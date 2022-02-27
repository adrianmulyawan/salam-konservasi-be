<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminNotification extends Controller
{
    public function index()
    {
        $entrySubmissions = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'PENDING')->latest()->limit(5)->get();
        $payments = Transaction::with(['conservation_area', 'user'])->where('payment_status', 'PENDING')->latest()->limit(5)->get();

        return view('pages.superAdmin.notif', compact([
            'entrySubmissions', 'payments',
        ]));
    }
}
