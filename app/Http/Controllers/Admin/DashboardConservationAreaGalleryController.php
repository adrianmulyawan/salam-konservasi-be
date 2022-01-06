<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ConservationAreaGalleryRequest;
use App\Models\ConservationArea;
use App\Models\ConservationAreaGallery;
use Illuminate\Http\Request;

class DashboardConservationAreaGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = ConservationAreaGallery::with(['conservation_area'])->paginate(5);
        return view('pages.superAdmin.gallery.dashboard-conservation-area-gallery', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conservation_areas = ConservationArea::all();
        return view('pages.superAdmin.gallery.dashboard-add-conservation-area-gallery', compact('conservation_areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ConservationAreaGalleryRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/conservation_gallery', 'public');
        ConservationAreaGallery::create($data);

        if ($data) {
            session()->flash('success', 'Data Galeri Kawasan Konservasi Berhasil Ditambahkan');
            return redirect()->route('Adminmanage-gallery.index');
        } else {
            session()->flash('failed', 'Data Galeri Kawasan Konservasi Gagal Ditambahkan');
            return redirect()->route('Adminmanage-gallery.index');
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
        $data = ConservationAreaGallery::findOrFail($id);
        $conservation_areas = ConservationArea::all();
        return view('pages.superAdmin.gallery.dashboard-edit-conservation-area-gallery', compact('data', 'conservation_areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ConservationAreaGalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store('assets/conservation_gallery', 'public');
        $item = ConservationAreaGallery::findOrFail($id)->update($data);

        if ($item) {
            session()->flash('success', 'Data Galeri Kawasan Konservasi Berhasil Diubah');
            return redirect()->route('Adminmanage-gallery.index');
        } else {
            session()->flash('failed', 'Data Galeri Kawasan Konservasi Gagal Diubah');
            return redirect()->route('Adminmanage-gallery.index');
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
        $data = ConservationAreaGallery::findOrFail($id)->delete();

        if ($data) {
            session()->flash('success', 'Data Galeri Kawasan Konservasi Berhasil Dihapus');
            return redirect()->route('Adminmanage-gallery.index');
        } else {
            session()->flash('failed', 'Data Galeri Kawasan Konservasi Gagal Dihapus');
            return redirect()->route('Adminmanage-gallery.index');
        }
    }
}
