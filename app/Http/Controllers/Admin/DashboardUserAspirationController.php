<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardUserAspirationController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.userAspiration.dashboard-user-aspiration');
    }

    public function detail($id)
    {
        return view('pages.superAdmin.userAspiration.dashboard-user-aspiration-detail');
    }
}
