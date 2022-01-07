<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EventRequest;
use App\Models\ConservationArea;
use App\Models\Event;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class DashboardEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Event::with(['conservation_area'])->paginate(5);
        return view('pages.superAdmin.event.dashboard-event', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conservation_areas = ConservationArea::all();
        return view('pages.superAdmin.event.dashboard-add-event', compact('conservation_areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['photo'] = $request->file('photo')->store('assets/event', 'public');
        $data['user_id'] = Auth::user()->id;

        Event::create($data);

        if ($data) {
            session()->flash('success', 'Data Acara Kawasan Konservasi Berhasil Ditambahkan');
            return redirect()->route('Adminmanage-event.index');
        } else {
            session()->flash('failed', 'Data Acara Kawasan Konservasi Gagal Ditambahkan');
            return redirect()->route('Adminmanage-event.index');
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
        $data = Event::findOrFail($id);
        $conservation_areas = ConservationArea::all();
        return view('pages.superAdmin.event.dashboard-edit-event', compact('data', 'conservation_areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);
        $data['photo'] = $request->file('photo')->store('assets/event', 'public');
        // $data['user_id'] = Auth::user()->id;

       $item = Event::findOrFail($id)->update($data);

        if ($item) {
            session()->flash('success', 'Data Acara Kawasan Konservasi Berhasil Diubah');
            return redirect()->route('Adminmanage-event.index');
        } else {
            session()->flash('failed', 'Data Acara Kawasan Konservasi Gagal Diubah');
            return redirect()->route('Adminmanage-event.index');
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
        $data = Event::findOrFail($id)->delete();

        if ($data) {
            session()->flash('success', 'Data Acara Kawasan Konservasi Berhasil Dihapus');
            return redirect()->route('Adminmanage-event.index');
        } else {
            session()->flash('failed', 'Data Acara Kawasan Konservasi Gagal Dihapus');
            return redirect()->route('Adminmanage-event.index');
        }
    }
}
