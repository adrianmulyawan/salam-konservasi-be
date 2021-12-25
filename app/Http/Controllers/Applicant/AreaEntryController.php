<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaEntryController extends Controller
{
    public function index ()
    {
        return view('pages.applicant.dashboard-entry');
    }
}
