<?php

namespace App\Http\Controllers\FieldAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VisitorCheckoutController extends Controller
{
    public function index()
    {
        return view('pages.fieldAdmin.dashboard-visitor-check-out');
    }
}
