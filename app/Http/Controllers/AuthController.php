<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function indexRegister()
    {
        return view('auth.register');
    }

    public function postRegister(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required',
            'address' => 'nullable'
        ]);

        Registration::create($validatedData);

        return redirect('/home')->with('success', 'Data Pendaftaran Akun Berhasil Diajukan!');
    }

    public function indexLogin()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->hasRole('admin')) {
                return redirect()->intended('/admin/dashboard');
            } else if (auth()->user()->hasRole('asesor')) {
                return redirect()->intended('/home');
            } else if (auth()->user()->hasRole('user')) {
                return redirect()->intended('/home');
            }
        }

        return back()->with('failed', 'Login Gagal!');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }
}
