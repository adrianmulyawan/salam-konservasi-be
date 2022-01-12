<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = News::paginate(5);
        return view('pages.superAdmin.news.dashboard-news', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superAdmin.news.dashboard-add-news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['photo'] = $request->file('photo')->store('assets/news', 'public');
        $data['user_id'] = Auth::user()->id;

        News::create($data);

        if ($data) {
            session()->flash('success', 'Data Berita Kawasan Konservasi Berhasil Ditambahkan');
            return redirect()->route('Adminmanage-news.index');
        } else {
            session()->flash('failed', 'Data Berita Kawasan Konservasi Gagal Ditambahkan');
            return redirect()->route('Adminmanage-news.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = News::findOrFail($id);
        return view('pages.superAdmin.news.dashboard-edit-news', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['photo'] = $request->file('photo')->store('assets/news', 'public');
        // $data['user_id'] = Auth::user()->id;

        $item = News::findOrFail($id)->update($data);

        if ($item) {
            session()->flash('success', 'Data Berita Kawasan Konservasi Berhasil Diubah');
            return redirect()->route('Adminmanage-news.index');
        } else {
            session()->flash('failed', 'Data Berita Kawasan Konservasi Gagal Diubah');
            return redirect()->route('Adminmanage-news.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = News::findOrFail($id)->delete();
        if ($data) {
            session()->flash('success', 'Data Berita Kawasan Konservasi Berhasil Dihapus');
            return redirect()->route('Adminmanage-news.index');
        } else {
            session()->flash('failed', 'Data Berita Kawasan Konservasi Gagal Dihapus');
            return redirect()->route('Adminmanage-news.index');
        }
    }
}
