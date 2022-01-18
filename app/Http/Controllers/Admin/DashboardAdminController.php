<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConservationArea;
use App\Models\Event;
use App\Models\News;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index()
    {
        // Card Dashboard Admin
        $user = User::count();
        $conservationArea = ConservationArea::count();
        $submission = Transaction::sum('submission_status');
        $submissionPending = Transaction::where('submission_status', 'PENDING')->count();
        $submissionAllowed = Transaction::where('submission_status', 'ALLOWED')->count();
        $submissionRejected = Transaction::where('submission_status', 'REJECTED')->count();
        $submissionFailed = Transaction::where('submission_status', 'FAILED')->count();
        $retributionPayment = Transaction::sum('payment_status');
        $retributionUnpaid = Transaction::where('payment_status', 'UNPAID')->count();
        $retributionPending = Transaction::where('payment_status', 'PENDING')->count();
        $retributionPaidOff = Transaction::where('payment_status', 'PAIDOFF')->count();
        $retributionFailed = Transaction::where('payment_status', 'FAILED')->count();

        // Data User, Berita, dan Acara yang baru ditambahkan
        $recentUsers = User::orderBy('created_at', 'DESC')->where('role', 'applicant')->limit(5)->get();
        $recentNews = News::orderBy('created_at', 'DESC')->limit(5)->get();
        $recentEvents = Event::orderBy('created_at', 'DESC')->limit(5)->get();

        // Pengjuan Terakhir Dilakukan
        $recentSubmission = Transaction::with(['user', 'conservation_area', 'purpose'])->orderBy('created_at', 'DESC')->where('submission_status', 'PENDING')->limit(3)->get();

        // Pembayaran Terakhir Dilakukan
        $recentTransaction = Transaction::with(['user', 'conservation_area'])->orderBy('created_at', 'DESC')->where('payment_status', 'pending')->limit(3)->get();

        return view('pages.superAdmin.dashboard', [
            'user' => $user,
            'conservationArea' => $conservationArea,
            'submission' => $submission,
            'retributionPayment' => $retributionPayment,
            'submissionPending' => $submissionPending,
            'submissionAllowed' => $submissionAllowed,
            'submissionRejected' => $submissionRejected,
            'submissionFailed' => $submissionFailed,
            'retributionUnpaid' => $retributionUnpaid,
            'retributionPending' => $retributionPending,
            'retributionPaidOff' => $retributionPaidOff,
            'retributionFailed' => $retributionFailed,
            'recentUsers' => $recentUsers,
            'recentNews' => $recentNews,
            'recentEvents' => $recentEvents,
            'recentSubmission' => $recentSubmission,
            'recentTransaction' => $recentTransaction
        ]);
    }
}
