<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //admin
        $registrations = Registration::all();
        return view('buat-test.admin.register.index', ['registrations' => $registrations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // user
        return view('buat-test.user.register.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // user
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
            'phone' => 'required|unique:users',
            'address' => 'nullable'
        ]);
        $validatedData['is_active'] = false;
        // $validatedData['password']= Hash::make($validatedData['password']);

        $user = Registration::create($validatedData);

        return redirect('/home')->with('success', 'Data Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        // admin
        $registrationData = [
            'name' => $registration->name,
            'email' => $registration->email,
            'password' => $registration->password,
            'phone' => $registration->phone,
            'address' => $registration->address,
            'is_active' => true
        ];

        $newUser = User::create($registrationData);
        $newUser->assignRole('user');

        Registration::destroy($registration->id);

        return redirect('/admin/registration')->with('success', 'Registrasi berhasil diterima');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        // admin
        Registration::destroy($registration->id);
        return redirect('/admin/registration')->with('success', 'Registrasi Berhasil Ditolak');
    }
}
