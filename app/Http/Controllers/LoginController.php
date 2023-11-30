<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('buat-test.admin.login.index');
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
                dd('admin');
                // return view('');
                return redirect()->intended('/admin/home');
            } else if (auth()->user()->hasRole('asesor')) {
                return redirect()->intended('/home');
            } else if (auth()->user()->hasRole('user')) {
                // dd('user');
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
