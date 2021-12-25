<?php

namespace App\Http\Controllers\FieldAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.fieldAdmin.dashboard');
    }

    public function detailVisit()
    {
        return view('pages.fieldAdmin.dashboard-visit-details');
    }
}
