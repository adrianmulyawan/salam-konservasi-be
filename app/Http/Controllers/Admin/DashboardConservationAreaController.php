<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ConservationAreaRequest;
use App\Models\ConservationArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardConservationAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ConservationArea::paginate(5);
        return view('pages.superAdmin.conservationArea.dashboard-conservation-area', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superAdmin.conservationArea.dashboard-add-conservation-area');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConservationAreaRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['map'] = $request->file('map')->store('assets/map', 'public');
        $data['user_id'] = Auth::user();

        ConservationArea::create($data);

        if ($data) {
            session()->flash('success', 'Data Kawasan Konservasi Berhasil Ditambahkan');
            return redirect()->route('Adminmanage-conservation-area-gallery.index');
        } else {
            session()->flash('failed', 'Data Kawasan Konservasi Gagal Ditambahkan');
            return redirect()->route('Adminmanage-conservation-area-gallery.index');
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
        $data = ConservationArea::findOrFail($id);
        return view('pages.superAdmin.conservationArea.dashboard-edit-conservation-area', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConservationAreaRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['map'] = $request->file('map')->store('assets/map', 'public');
        $data['user_id'] = Auth::user();

        $item = ConservationArea::findOrFail($id)->update($data);

        if ($item) {
            session()->flash('success', 'Data Kawasan Konservasi Berhasil Diubah');
            return redirect()->route('Adminmanage-conservation-area-gallery.index');
        } else {
            session()->flash('failed', 'Data Kawasan Konservasi Gagal Diubah');
            return redirect()->route('Adminmanage-conservation-area-gallery.index');
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
        //
    }
}
