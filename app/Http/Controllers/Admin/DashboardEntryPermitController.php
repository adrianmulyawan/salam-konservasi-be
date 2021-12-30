<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardEntryPermitController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.dashboard-entry-permit');
    }
}
