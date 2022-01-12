<?php

namespace App\Http\Controllers;

use App\Models\ConservationArea;
use App\Models\Equipment;
use App\Models\Event;
use App\Models\MasterPrice;
use Illuminate\Http\Request;

class DetailConservationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $slug)
    {
        $item = ConservationArea::with(['galleries'])->where('slug', $slug)->firstOrFail();
        $equipments = Equipment::all();
        $tourism_prices = MasterPrice::where('purpose_id', 1)->get();
        $research_prices = MasterPrice::where('purpose_id', 2)->get();
        $education_prices = MasterPrice::where('purpose_id', 3)->get();
        $event_conservations = Event::with(['conservation_area'])->limit(4)->orderBy('created_at', 'DESC')->get();

        return view('pages.conservation-area-detail', compact([
            'item', 'equipments', 'tourism_prices', 'research_prices', 'education_prices', 'event_conservations'
        ]));
    }
}
