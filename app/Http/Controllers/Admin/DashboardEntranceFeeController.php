<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EntranceFeeRequest;
use App\Models\MasterPrice;
use App\Models\Purpose;
use Illuminate\Http\Request;

class DashboardEntranceFeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = MasterPrice::with(['purpose'])->get();
        return view('pages.superAdmin.entranceFee.dashboard-entrance-fee', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $purposes = Purpose::all();
        return view('pages.superAdmin.entranceFee.dashboard-add-entrance-fee', compact('purposes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntranceFeeRequest $request)
    {
        $data = $request->all();
        MasterPrice::create($data);

        if ($data) {
            session()->flash('success', 'Data Tarif Masuk Kawasan Berhasil Ditambahkan');
            return redirect()->route('Adminentrance-fee.index');
        } else {
            session()->flash('failed', 'Data Tarif Masuk Kawasan Gagal Ditambahkan');
            return redirect()->route('Adminentrance-fee.index');
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
        $data = MasterPrice::findOrFail($id);
        $purposes = Purpose::all();
        return view('pages.superAdmin.entranceFee.dashboard-edit-entrance-fee', compact('data', 'purposes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EntranceFeeRequest $request, $id)
    {
        $data = $request->all();

        $item = MasterPrice::findOrFail($id)->update($data);
        if ($item) {
            session()->flash('success', 'Data Tarif Masuk Kawasan Berhasil Diubah');
            return redirect()->route('Adminentrance-fee.index');
        } else {
            session()->flash('failed', 'Data Tarif Masuk Kawasan Gagal Diubah');
            return redirect()->route('Adminentrance-fee.index');
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
        $item = MasterPrice::findOrFail($id)->delete();

        if ($item) {
            session()->flash('success', 'Data Tarif Masuk Kawasan Berhasil Dihapus');
            return redirect()->route('Adminentrance-fee.index');
        } else {
            session()->flash('failed', 'Data Tarif Masuk Kawasan Gagal Dihapus');
            return redirect()->route('Adminentrance-fee.index');
        }
    }
}
