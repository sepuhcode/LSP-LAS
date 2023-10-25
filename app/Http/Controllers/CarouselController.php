<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('BuatTest.Admin.Carousel.index',[
            'carousels'=>Carousel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('BuatTest.Admin.Carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'required|image|mimes:png,jpg,jpeg|max:4096'
        ]);
        
        $fileName = time().'.'.$request->image->extension();

        $validatedData = [
            'file_name'=> $fileName,
            'visibility'=>true    
        ];

        Carousel::create($validatedData);


        $request->image->move(public_path('carouselImg'),$fileName);

        return redirect('/admin/carousel')->with('success','image uploaded');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel, $type)
    {
        dd('ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        Carousel::destroy($carousel->id);
        return redirect('/admin/carousel')->with('success','Data Berhasil Dihapus');
    }
}
