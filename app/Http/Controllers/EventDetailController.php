<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;

class EventDetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $slug)
    {
        $item = Event::with(['user', 'conservation_area'])->where('slug', $slug)->firstOrFail();
        $recent_events = Event::with(['conservation_area'])->latest()->limit(4)->get();
        return view('pages.event-detail', compact('item', 'recent_events'));
    }
}
