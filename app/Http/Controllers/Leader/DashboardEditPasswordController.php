<?php

namespace App\Http\Controllers\Leader;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class DashboardEditPasswordController extends Controller
{
    public function edit()
    {
        return view('pages.leader.dashboard-setting-password');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password'         => ['required', 'min:8', 'confirmed']
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => bcrypt($request->password)]);
            session()->flash('success', 'Password Berhasil Diubah');
            return redirect()->route('LeadersettingAccountLeader');
        }

        throw ValidationException::withMessages([
            'current_password' => 'Password Lama Anda Salah!'
        ]);
    }
}
