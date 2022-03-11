<?php

namespace App\Http\Controllers\FieldAdmin;

use App\Http\Controllers\Controller;
use App\Models\VisitorControl;
use Illuminate\Http\Request;

class VisitorCheckoutController extends Controller
{
    public function index()
    {
        $datas = VisitorControl::with(['transaction'])->latest()->paginate(10);
        return view('pages.fieldAdmin.dashboard-visitor-checkout', compact([
            'datas'
        ]));
    }

    public function show($id)
    {  
        $item = VisitorControl::with(['transaction'])->findOrFail($id);
        return view('pages.fieldAdmin.dashboard-detail-visitor-checkout', compact('item'));
    }
}
