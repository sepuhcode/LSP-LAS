<?php

namespace App\Http\Controllers;

use App\Models\FotoKaryawan;
use Illuminate\Http\Request;

class TimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.tim.index', [
            'karyawans' => FotoKaryawan::all(),
            'page' => 'Foto Karyawan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.tim.create', [
            'page' => 'Foto Karyawan'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:512',
            'name' => 'required|string|unique:foto_karyawans',
            'department' => 'required',
        ]);

        $fileName = 'karyawan' . time() . '.' . $request->image->extension();
        $validatedData['image'] = $fileName;

        FotoKaryawan::create($validatedData);
        $request->image->move(public_path('Images/our-team'), $fileName);

        return redirect('/admin/tim')->with('success', 'Uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(FotoKaryawan $tim)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FotoKaryawan $tim)
    {
        return view('Admin.tim.update', [
            'karyawan' => $tim,
            'page' => 'Foto Karyawan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FotoKaryawan $tim)
    {
        $rules = [
            'department' => 'required',
        ];
        $request->name != $tim->name ? $rules['name'] = 'required|unique:foto_karyawans' : '';

        if ($request->hasFile('image')) {
            $rules['image'] = 'required|image|mimes:png,jpg,jpeg|max:512';
        }

        $updatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('Images/our-team/' . $tim->image))) {
                unlink(public_path('Images/our-team/' . $tim->image));
            }

            $newFileName = 'karyawan' . time() . '.' . $request->image->extension();
            $updatedData['image'] = $newFileName;
            $request->image->move(public_path('Images/our-team'), $newFileName);
        }
        FotoKaryawan::whereId($tim->id)->update($updatedData);
        return redirect('/admin/tim')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FotoKaryawan $tim)
    {
        FotoKaryawan::destroy($tim->id);
        if (file_exists(public_path('Images/our-team/' . $tim->image))) {
            unlink(public_path('Images/our-team/' . $tim->image));
        }
        return redirect('/admin/tim')->with('success', 'Deleted');
    }
}
