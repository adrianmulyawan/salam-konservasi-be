<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserAspirationController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.dashboard-user-aspiration');
    }

    public function detail()
    {
        return view('pages.superAdmin.dashboard-user-aspiration-detail');
    }
}
