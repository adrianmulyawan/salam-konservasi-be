<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserSettingRequest;

class DashboardSettingAdminController extends Controller
{
    public function edit()
    {
        return view('pages.superAdmin.settingsAccount.dashboard-setting-account');
    }

    public function update(UserSettingRequest $request)
    {
        $data = $request->all();

        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        
        $updateData = auth()->user()->update($data);

        if ($updateData) {
            session()->flash('success', 'Data User Berhasil Diubah');
            return redirect()->route('AdminsettingAccountAdmin');
        } else {
            session()->flash('failed', 'Data User Gagal Diubah');
            return redirect()->route('AdminsettingAccountAdmin');
        }
    }
}
