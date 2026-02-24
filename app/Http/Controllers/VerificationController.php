<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;

class VerificationController extends Controller
{
    public function index()
    {
        $registrations = Registration::whereAccepted(null);

        return view('Admin.verifikasi.index', ['registrations' => $registrations]);
    }

    public function create()
    {
        return view('auth.admin-register');
    }

    public function postAccept($id)
    {
        $registrationData = Registration::find($id);
        $data = [
            'name' => $registrationData->name,
            'email' => $registrationData->email,
            'password' => $registrationData->password,
            'phone' => $registrationData->phone,
            'address' => $registrationData->address,
            'is_active' => true,
        ];

        $newUser = User::create($data);
        $newUser->assignRole('user');

        Registration::where('id', $id)->update(['accepted' => 1]);

        return redirect('/admin/verification')->with('success', 'Registrasi berhasil diterima');
    }

    public function postReject($id)
    {
        Registration::where('id', $id)->update(['accepted' => 0]);

        return redirect('/admin/verification')->with('success', 'Registrasi Berhasil Ditolak');
    }
}
