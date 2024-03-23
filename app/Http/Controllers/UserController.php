<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user.index',[
            'users' => User::all(),
            'page' => 'User'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create',[
            'page'=>'User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required|unique:users',
            'address' => 'nullable'
        ]);
        $validatedData['is_active'] = true;
        // $validatedData['password']= Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $user->assignRole($request['role']);

        return redirect('/admin/user')->with('success','Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // dd($user);
        return view('admin.user.update',[
            'user'=>$user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
            'is_active' => 'required',
            'address' => 'nullable',
        ];
        //cek perubahan data pada no telp, email
        $request->phone != $user->phone ? $rules['phone'] = 'required|unique:users' : '';
        $request->email != $user->email ? $rules['email'] = 'required|unique:users' : '';

        // Cek isi inputan password\
        $request->filled('password') ? $rules['password'] = 'required|min:8' : '';


        $validatedData = $request->validate($rules);

        if ($user->getRoleNames()[0] != $request->role) {
            $user->syncRoles($request->role);
        }
        // hash password baru
        // $request->filled('password') ? $validatedData['password'] = Hash::make($validatedData['password']) : '';

        User::where('id', $user->id)
            ->update($validatedData);
        return redirect('/admin/user')->with('success','Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/admin/user')->with('success','Deleted');
    }
}
