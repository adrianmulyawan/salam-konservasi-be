<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardManageEntryPermitController extends Controller
{
    public function index()
    {
        return view('pages.superAdmin.manageEntryPermit.dashboard-manage-entry-permit');
    }

    public function uploadEntryPermit($id)
    {
        return view('pages.superAdmin.manageEntryPermit.dashboard-upload-entry-permit');
    }

    public function detailEntryPermit()
    {
        return view('pages.superAdmin.manageEntryPermit.dashboard-detail-entry-permit');
    }
}
