<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use App\Models\UserAspiration;
use Illuminate\Http\Request;

class DashboardUserAspirationController extends Controller
{
    public function index()
    {
        $forms = UserAspiration::orderBy('created_at', 'DESC')->paginate(10);
        return view('pages.leader.dashboard-user-aspiration', compact('forms'));
    }

    public function detail($id)
    {
        $item = UserAspiration::where('id', $id)->firstOrFail();
        return view('pages.leader.dashboard-user-aspiration-detail', compact('item'));
    }
}
