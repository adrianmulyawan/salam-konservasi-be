<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PurposeRequest;
use App\Models\Purpose;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardDestinationEntryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Purpose::paginate(5);
        return view('pages.superAdmin.destinationEntry.dashboard-destination-entry', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superAdmin.destinationEntry.dashboard-add-destination-entry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PurposeRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->purpose_name);
        Purpose::create($data);

        if ($data) {
            session()->flash('success', 'Data Tujuan Masuk Kawasan Berhasil Ditambahkan');
            return redirect()->route('Admindestination-entry.index');
        } else {
            session()->flash('failed', 'Data Tujuan Masuk Kawasan Gagal Ditambahkan');
            return redirect()->route('Admindestination-entry.index');
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
        $data = Purpose::findOrFail($id);
        return view('pages.superAdmin.destinationEntry.dashboard-edit-destination-entry', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PurposeRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->purpose_name);

        $item = Purpose::findOrFail($id)->update($data);
        if ($item) {
            session()->flash('success', 'Data Tujuan Masuk Kawasan Berhasil Diubah');
            return redirect()->route('Admindestination-entry.index');
        } else {
            session()->flash('failed', 'Data Tujuan Masuk Kawasan Gagal Diubah');
            return redirect()->route('Admindestination-entry.index');
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
        $data = Purpose::findOrFail($id);
        $data->delete();

        if ($data) {
            session()->flash('success', 'Data Tujuan Masuk Kawasan Berhasil Dihapus');
            return redirect()->route('Admindestination-entry.index');
        } else {
            session()->flash('failed', 'Data Tujuan Masuk Kawasan Gagal Dihapus');
            return redirect()->route('Admindestination-entry.index');
        }
    }
}
