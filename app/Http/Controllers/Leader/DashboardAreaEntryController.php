<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardAreaEntryController extends Controller
{
    public function index()
    {
        return view('pages.leader.dashboard-area-entry');
    }
}
