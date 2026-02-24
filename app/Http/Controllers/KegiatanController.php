<?php

namespace App\Http\Controllers;

use App\Models\FotoKegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admin.kegiatan.index', [
            'kegiatans' => FotoKegiatan::all(),
            'page' => 'Foto Kegiatan',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.kegiatan.create', [
            'page' => 'Foto Kegiatan',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:512',
            'name' => 'required|string|unique:foto_kegiatans',
            'date' => 'required|date',
        ]);

        $fileName = 'kegiatan'.time().'.'.$request->image->extension();
        $validatedData['image'] = $fileName;

        FotoKegiatan::create($validatedData);
        $request->image->move(public_path('Images/kegiatan'), $fileName);

        return redirect('/admin/kegiatan')->with('success', 'Uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(FotoKegiatan $fotoKegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FotoKegiatan $fotoKegiatan)
    {
        return view('Admin.kegiatan.update', [
            'kegiatan' => $fotoKegiatan,
            'page' => 'Foto Kegiatan',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FotoKegiatan $fotoKegiatan)
    {
        $rules = [
            'date' => 'required',
        ];
        $request->name != $fotoKegiatan->name ? $rules['name'] = 'required|string|unique:foto_kegiatans' : '';

        if ($request->hasFile('image')) {
            $rules['image'] = 'required|image|mimes:png,jpg,jpeg|max:512';
        }

        $updatedData = $request->validate($rules);

        if ($request->hasFile('image')) {
            if (file_exists(public_path('Images/kegiatan/'.$fotoKegiatan->image))) {
                unlink(public_path('Images/kegiatan/'.$fotoKegiatan->image));
            }

            $newFileName = 'kegiatan'.time().'.'.$request->image->extension();
            $updatedData['image'] = $newFileName;
            $request->image->move(public_path('Images/kegiatan'), $newFileName);
        }
        FotoKegiatan::whereId($fotoKegiatan->id)->update($updatedData);

        return redirect('/admin/kegiatan')->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FotoKegiatan $fotoKegiatan)
    {
        FotoKegiatan::destroy($fotoKegiatan->id);
        if (file_exists(public_path('Images/kegiatan/'.$fotoKegiatan->image))) {
            unlink(public_path('Images/kegiatan/'.$fotoKegiatan->image));
        }

        return redirect('/admin/kegiatan')->with('success', 'Deleted');
    }
}
