<?php

namespace App\Http\Controllers\Applicant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingApplicantController extends Controller
{
    public function edit()
    {
        return view('pages.applicant.dashboard-setting-account');
    }

    public function update(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'email'        => 'required|email',
            'phone_number' => 'required',
            'address'      => 'required'
        ]);

        $data = $request->all();

        $updateData = Auth::user()->update($data);

        if ($updateData) {
            session()->flash('success', 'Data User Berhasil Diubah');
            return redirect()->route('settingAccountApplicant');
        } else {
            session()->flash('failed', 'Data User Gagal Diubah');
            return redirect()->route('settingAccountApplicant');
        }
    }
}
