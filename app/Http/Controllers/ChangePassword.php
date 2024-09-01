<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Controller
{
    public function changePassword()
    {
        return view('change-password.index',[
            'page'=>'Ganti Password'
        ]);
    }

    public function savePassword(Request $request)
    {
        $request->validate([
            'current_password'=>'required|min:8|current_password',
            'password'=>'required|min:8|confirmed',
            'password_confirmation'=>'required|min:8'
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->update([
            'password'=>$request->password,
        ]);
        if($user->hasRole('admin')){
            $url = "/admin/home";
        }
        else if($user->hasRole('asesor')){
            $url = "/asesor/home";
        }
        else if($user->hasRole('user')){
            $url = "/user/home";
        }
        else if($user->hasRole('tuk')){
            $url = "/user-tuk/home";
        }
        return redirect($url)->with('success','Password berhasil diubah');
    }
}
