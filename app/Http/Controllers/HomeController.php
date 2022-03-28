<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserAspirationRequest;
use App\Models\ConservationArea;
use App\Models\Event;
use App\Models\News;
use App\Models\Transaction;
use App\Models\UserAspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $conservation_area = ConservationArea::count();
        $transaction_tourism = Transaction::where('purpose_id', '1')->count();
        $transaction_research = Transaction::where('purpose_id', '2')->count();
        $transaction_education = Transaction::where('purpose_id', '3')->count();
        $items = ConservationArea::with(['galleries'])->limit(3)->orderBy('created_at', 'DESC')->get();
        $recent_event = Event::with(['conservation_area'])->orderBy('created_at', 'DESC')->limit(3)->get();
        $recent_news = News::orderBy('created_at', 'DESC')->limit(3)->get();

        return view('pages.home', compact([
            'conservation_area', 'items', 'transaction_tourism', 'transaction_research', 'transaction_education', 'recent_event', 'recent_news',
        ]));
    }

    public function storeUserAspiration(UserAspirationRequest $request)
    {
        $data = $request->all();

        $aspiration = UserAspiration::create($data);

        if ($aspiration) {
            session()->flash('success', 'Aspirasi Anda Berhasil Ditambahkan');
            return redirect()->route('home');
        } else {
            session()->flash('failed', 'Aspirasi Anda Gagal Ditambahkan');
            return redirect()->route('home');
        }
    }

    // public function countNotif()
    // {
    //     $applicantNotif = Transaction::where('user_id', Auth::user()->id)
    //                       ->orWhere('submission_status', 'ALLOWED')
    //                       ->orWhere('submission_status', 'REJECTED')
    //                       ->orWhere('submission_status', 'FAILED')
    //                       ->orWhere('payment_status', 'PAIDOFF')
    //                       ->orWhere('payment_status', 'FAILED')
    //                       ->whereNotNull('entrance_ticket')
    //                       ->count();
        
    //     return view('pages.home', compact('applicantNotif'));
    // }
}
