<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\Purpose;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Card Atas
        $submissionTotal = Transaction::where('submission_status', 'PENDING')->orWhere('submission_status', 'ALLOWED')->orWhere('submission_status', 'REJECTED')->orWhere('submission_status', 'FAILED')->count();
        $submissionPending = Transaction::where('submission_status', 'PENDING')->count();
        $paymentPending = Transaction::where('submission_status', 'ALLOWED')->where('payment_status', 'PENDING')->count();
        // Card Tengah
        $submissionAllowed = Transaction::where('submission_status', 'ALLOWED')->count();
        $submissionRejected = Transaction::where('submission_status', 'REJECTED')->count();
        $submissionFailed = Transaction::where('submission_status', 'FAILED')->count();
        // Card Bawash
        $submissionTourism = Transaction::where('purpose_id', 1)->count();
        $submissionResearch = Transaction::where('purpose_id', 2)->count();
        $submissionEducation = Transaction::where('purpose_id', 3)->count();

        // Recent Submission
        $recentSubmission = Transaction::with(['conservation_area', 'purpose', 'user'])->latest()->limit(3)->get();

        // Recent Payment
        $recentTransaction = Transaction::with(['conservation_area', 'user'])->where('submission_status', 'ALLOWED')->where('payment_status', 'PENDING')->latest()->limit(3)->get();

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

        return view('pages.leader.dashboard', compact([
            'submissionTotal', 'submissionPending', 'paymentPending',
            'submissionAllowed', 'submissionRejected', 'submissionFailed',
            'submissionTourism', 'submissionResearch', 'submissionEducation',
            'recentSubmission', 'recentTransaction', 'chart'
        ]));
    }
}
