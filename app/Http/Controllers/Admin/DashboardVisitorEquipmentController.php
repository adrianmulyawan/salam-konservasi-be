<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EquipmentRequest;
use App\Models\Equipment;
use App\Models\Purpose;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardVisitorEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Equipment::paginate(5);
        return view('pages.superAdmin.equipment.dashboard-visitor-equipment', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superAdmin.equipment.dashboard-add-visitor-equipment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EquipmentRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->equipment_name);

        Equipment::create($data);

        if ($data) {
            session()->flash('success', 'Data Peralatan Berhasil Ditambahkan');
            return redirect()->route('Adminvisitor-equipment.index');
        } else {
            session()->flash('failed', 'Data Peralatan Gagal Ditambahkan');
            return redirect()->route('Adminvisitor-equipment.index');
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
        $data = Equipment::findOrFail($id);
        return view('pages.superAdmin.equipment.dashboard-edit-visitor-equipment', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EquipmentRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->equipment_name);

        $item = Equipment::findOrFail($id)->update($data);

        if ($item) {
            session()->flash('success', 'Data Peralatan Berhasil Diubah');
            return redirect()->route('Adminvisitor-equipment.index');
        } else {
            session()->flash('failed', 'Data Peralatan Gagal Diubah');
            return redirect()->route('Adminvisitor-equipment.index');
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
        $data = Equipment::findOrFail($id)->delete();

        if ($data) {
            session()->flash('success', 'Data Peralatan Berhasil Dihapus');
            return redirect()->route('Adminvisitor-equipment.index');
        } else {
            session()->flash('failed', 'Data Peralatan Gagal Dihapus');
            return redirect()->route('Adminvisitor-equipment.index');
        }
    }
}
