<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConservationArea;
use App\Models\Event;
use App\Models\News;
use App\Models\Purpose;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    public function index()
    {
        // Card Dashboard Admin
        $user = User::where('role', 'applicant')->count();
        $conservationArea = ConservationArea::count();

        // Pengajuan Izin Masuk Kawasan
        $submission = Transaction::where('submission_status', 'PENDING')->orWhere('submission_status', 'ALLOWED')->orWhere('submission_status', 'REJECTED')->orWhere('submission_status', 'FAILED')->count();
        $submissionPending = Transaction::where('submission_status', 'PENDING')->count();
        $submissionAllowed = Transaction::where('submission_status', 'ALLOWED')->count();
        $submissionRejected = Transaction::where('submission_status', 'REJECTED')->count();
        $submissionFailed = Transaction::where('submission_status', 'FAILED')->count();

        // Pembayaran Retribusi
        $retributionPayment = Transaction::where('payment_status', 'UNPAID')->orWhere('payment_status', 'PENDING')->orWhere('payment_status', 'PAIDOFF')->orWhere('payment_status', 'FAILED')->count();
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
        $recentTransaction = Transaction::with(['user', 'conservation_area'])->orderBy('created_at', 'DESC')->where('payment_status', 'PENDING')->limit(3)->get();

        // Chart
        $chart = [];
        $purpose = Purpose::all();
        $transaction = Transaction::where([
            ['submission_status', 'ALLOWED'],
            ['payment_status', 'PAIDOFF']
        ])->get();

        $backgroundColor =  [
            '#eb3434',
            '#ebb134',
            '#dceb34',
        ];
        $purposeArr = [];

        foreach ($purpose as $key=> $value) {            
            $chart[$key]['label'] = $value->purpose_name;
            $chart[$key]['data'] = [0,0,0,0,0,0,0,0,0,0,0,0];
            $chart[$key]['borderColor'] = 'rgba(255, 99, 132, 1)';
            $chart[$key]['backgroundColor'] = $backgroundColor[$key] ?? '#eb3434';
            $purposeArr[$value->id] = $key;
        }

        foreach ($transaction as $key => $value) {
            if(isset($purpose[$value->purpose_id])){
                $date = date('m', strtotime($value->date_of_entry));
                $keyPurpose = $purposeArr[$value->purpose_id];
                $chart[$keyPurpose]['data'][((int)$date)-1] += 1;
            }
        }

        return view('pages.superAdmin.dashboard', [
            'chart' => $chart,
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
            'recentTransaction' => $recentTransaction,
        ]);
    }
}
