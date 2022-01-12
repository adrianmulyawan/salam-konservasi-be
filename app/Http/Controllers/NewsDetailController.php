<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsDetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, $slug)
    {
        $item = News::with('user')->where('slug', $slug)->firstOrFail();
        $all_news = News::latest()->limit(4)->get();
        return view('pages.news-detail', compact([
            'item', 'all_news'
        ]));
    }
}
