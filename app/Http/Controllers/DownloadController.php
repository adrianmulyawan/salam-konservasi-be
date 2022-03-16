<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        $items = Download::latest()->paginate(10);
        return view('pages.download', compact('items'));
    }
}
