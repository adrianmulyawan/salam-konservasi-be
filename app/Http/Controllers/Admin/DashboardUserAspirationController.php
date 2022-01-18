<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserAspiration;
use Illuminate\Http\Request;

class DashboardUserAspirationController extends Controller
{
    public function index()
    {
        $forms = UserAspiration::orderBy('created_at', 'DESC')->paginate(10);
        return view('pages.superAdmin.userAspiration.dashboard-user-aspiration', compact('forms'));
    }

    public function detail($id)
    {
        return view('pages.superAdmin.userAspiration.dashboard-user-aspiration-detail');
    }
}
