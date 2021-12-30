<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardManageEntryPermit extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.dashboard-manage-entry-permit');
    }

    public function uploadEntryPermit()
    {
        return view('pages.superAdmin.dashboard-upload-entry-permit');
    }

    public function detailEntryPermit()
    {
        return view('pages.superAdmin.dashboard-detail-entry-permit');
    }
}
