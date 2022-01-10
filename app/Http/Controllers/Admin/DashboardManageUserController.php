<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = User::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.superAdmin.manageUser.dashboard-manage-user', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.superAdmin.manageUser.dashboard-add-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        User::create($data);

        if ($data) {
            session()->flash('success', 'Data User Berhasil Ditambahkan');
            return redirect()->route('Adminmanage-user.index');
        } else {
            session()->flash('failed', 'Data User Gagal Ditambahkan');
            return redirect()->route('Adminmanage-user.index');
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
        $data = User::findOrFail($id);
        return view('pages.superAdmin.manageUser.dashboard-edit-user', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        $data = $request->all();
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }
        
        $item = User::findOrFail($id)->update($data);

        if ($item) {
            session()->flash('success', 'Data User Berhasil Diubah');
            return redirect()->route('Adminmanage-user.index');
        } else {
            session()->flash('failed', 'Data User Gagal Diubah');
            return redirect()->route('Adminmanage-user.index');
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
        $data = User::findOrFail($id)->delete();
        if ($data) {
            session()->flash('success', 'Data User Berhasil Dihapus');
            return redirect()->route('Adminmanage-user.index');
        } else {
            session()->flash('failed', 'Data User Gagal Dihapus');
            return redirect()->route('Adminmanage-user.index');
        }
    }
}
