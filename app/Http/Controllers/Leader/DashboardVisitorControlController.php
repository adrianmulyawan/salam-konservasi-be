<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\VisitorControl;
use Illuminate\Http\Request;

class DashboardVisitorControlController extends Controller
{
    public function index()
    {
        $datas = VisitorControl::with(['transaction'])->latest()->paginate(10);
        return view('pages.leader.dashboard-visitor-control', compact([
            'datas'
        ]));
    }

    public function show($id)
    {
        $item = VisitorControl::with(['transaction'])->findOrFail($id);
        return view('pages.leader.dashboard-detail-visitor-control', compact([
            'item'
        ]));
    }
}
