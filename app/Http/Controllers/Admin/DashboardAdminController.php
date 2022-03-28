<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ConservationArea;
use App\Models\Event;
use App\Models\News;
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
        $user = User::count();
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

        // Chart Transaksi
        // $transactionTourist = Transaction::select('id', 'date_of_entry')->where('purpose_id', 1)->get()->groupBy(function($data) {
        //     return Carbon::parse($data->date_of_entry)->format('M');
        // });
        // // dd($transactionTourist);
        // $monthTourist = [];
        // $countTourist = [];
        // foreach ($transactionTourist as $month => $values) {
        //     $monthTourist[] = $month;
        //     $countTourist[] = count($values);
        // }
        // // dd($countTourist);

        // $transactionResearch = Transaction::select('id', 'date_of_entry')->where('purpose_id', 2)->get()->groupBy(function($data) {
        //     return Carbon::parse($data->date_of_entry)->format('M');
        // });
        // $countResearch = [];
        // foreach ($transactionResearch as $values) {
        //     $countResearch[] = count($values);
        // }

        // $transactionEducation = Transaction::select('id', 'date_of_entry')->where('purpose_id', 3)->get()->groupBy(function($data) {
        //     return Carbon::parse($data->date_of_entry)->format('M');
        // });
        // $countEducation = [];
        // foreach ($transactionEducation as $values) {
        //     $countEducation[] = count($values);
        // }

        $tourism = Transaction::select(DB::raw("COUNT(*) as count"))
                   ->where('purpose_id', 1)
                   ->whereYear('date_of_entry', date('Y'))
                   ->groupBy(DB::raw("Month(date_of_entry)"))
                   ->pluck('count');
        $research = Transaction::select(DB::raw("COUNT(*) as count"))
                    ->where('purpose_id', 2)
                    ->whereYear('date_of_entry', date('Y'))
                    ->groupBy(DB::raw("Month(date_of_entry)"))
                    ->pluck('count');
        $months = Transaction::select(DB::raw("Month(date_of_entry) as month"))
                  ->whereYear('date_of_entry', date('Y'))
                  ->groupBy(DB::raw("Month(date_of_entry)"))
                  ->pluck('month');
        // $datasTourism = array(0,0,0,0,0,0,0,0,0,0,0,0);
        // $datasResearch = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        // foreach ($months as $index => $month) {
        //     $datasTourism[$month] = $tourism[$index];
        // }

        // foreach ($months as $index => $month) {
        //     $datasResearch[$month] = $research[$index];
        // }

        // Data User, Berita, dan Acara yang baru ditambahkan
        $recentUsers = User::orderBy('created_at', 'DESC')->where('role', 'applicant')->limit(5)->get();
        $recentNews = News::orderBy('created_at', 'DESC')->limit(5)->get();
        $recentEvents = Event::orderBy('created_at', 'DESC')->limit(5)->get();

        // Pengjuan Terakhir Dilakukan
        $recentSubmission = Transaction::with(['user', 'conservation_area', 'purpose'])->orderBy('created_at', 'DESC')->where('submission_status', 'PENDING')->limit(3)->get();

        // Pembayaran Terakhir Dilakukan
        $recentTransaction = Transaction::with(['user', 'conservation_area'])->orderBy('created_at', 'DESC')->where('payment_status', 'PENDING')->limit(3)->get();

        $superAdminNotif = Transaction::where('submission_status', 'PENDING')
                           ->orWhere('payment_status', 'PENDING')
                           ->count();

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
            'recentTransaction' => $recentTransaction,
            'superAdminNotif' => $superAdminNotif,
        ]);
    }
}
