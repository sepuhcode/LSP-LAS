<?php

namespace App\Http\Controllers;

use App\Models\FotoKaryawan;
use Illuminate\Http\Request;

class FotoKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.foto-karyawan.index', [
            'karyawans' => FotoKaryawan::all(),
            'page' => 'Foto Karyawan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.foto-karyawan.create',[
            'page'=>'Foto Karyawan'
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
        $request->image->move(public_path('images/our-team'), $fileName);

        return redirect('/admin/gambar-karyawan')->with('success', 'Uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(FotoKaryawan $fotoKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FotoKaryawan $fotoKaryawan)
    {
        return view('admin.foto-karyawan.update',[
            'karyawan'=>$fotoKaryawan,
            'page' => 'Foto Karyawan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FotoKaryawan $fotoKaryawan)
    {
        $rules = [
            'department' => 'required',
        ];
        $request->name != $fotoKaryawan->name ? $rules['name']= 'required|unique:foto_karyawans': '';

        if ($request->hasFile('image')) {
            $rules['image'] = 'required|image|mimes:png,jpg,jpeg|max:512';
        }

        $updatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('images/our-team/' . $fotoKaryawan->image))) {
                unlink(public_path('images/our-team/' . $fotoKaryawan->image));
            }

            $newFileName = 'karyawan' . time() . '.' . $request->image->extension();
            $updatedData['image'] = $newFileName;
            $request->image->move(public_path('images/our-team'), $newFileName);
        }
        FotoKaryawan::whereId($fotoKaryawan->id)->update($updatedData);
        return redirect('/admin/gambar-karyawan')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FotoKaryawan $fotoKaryawan)
    {
        FotoKaryawan::destroy($fotoKaryawan->id);
        if (file_exists(public_path('images/our-team/' . $fotoKaryawan->image))) {
            unlink(public_path('images/our-team/' . $fotoKaryawan->image));
        }
        return redirect('/admin/gambar-karyawan')->with('success', 'Deleted');
    }
}
