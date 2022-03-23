<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardManageDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Download::paginate(5);
        return view('pages.superAdmin.downloader.dashboard-downloader', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superAdmin.downloader.dashboard-add-downloader');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Download::create($data);

        if ($data) {
            session()->flash('success', 'Data Unduh Berhasil Ditambahkan!');
            return redirect()->route('Adminmanage-downloader.index');
        } else {
            session()->flash('failed', 'Data Unduh Gagal Ditambahkan!');
            return redirect()->route('Adminmanage-downloader.index');
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
        $data = Download::findOrFail($id);
        return view('pages.superAdmin.downloader.dashboard-edit-downloader', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Download::findOrFail($id)->update($data);

        if ($data) {
            session()->flash('success', 'Data Unduh Berhasil Diubah!');
            return redirect()->route('Adminmanage-downloader.index');
        } else {
            session()->flash('failed', 'Data Unduh Gagal Diubah!');
            return redirect()->route('Adminmanage-downloader.index');
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
        $data = Download::findOrFail($id)->delete();

        if ($data) {
            session()->flash('success', 'Data Unduh Berhasil Dihapus!');
            return redirect()->route('Adminmanage-downloader.index');
        } else {
            session()->flash('failed', 'Data Unduh Gagal Dihapus!');
            return redirect()->route('Adminmanage-downloader.index');
        }
    }
}
