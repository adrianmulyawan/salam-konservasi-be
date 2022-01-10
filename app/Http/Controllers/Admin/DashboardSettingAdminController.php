<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardSettingAdminController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.settingsAccount.dashboard-setting-account');
    }
}
