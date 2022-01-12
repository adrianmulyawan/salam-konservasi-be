<?php

namespace App\Http\Controllers;

use App\Models\ConservationArea;
use App\Models\Event;
use App\Models\News;
use App\Models\Transaction;
use Illuminate\Http\Request;

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
        return view('pages.home', compact([
            'conservation_area', 'items', 'transaction_tourism', 'transaction_research', 'transaction_education', 'recent_event'
        ]));
    }
}
