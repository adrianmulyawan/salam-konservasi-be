<?php

namespace App\Http\Controllers;

use App\Models\ConservationArea;
use Illuminate\Http\Request;

class ConservationAreaController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = ConservationArea::with(['galleries'])->paginate(5);
        return view('pages.conservation-area', compact('items'));
    }
}
