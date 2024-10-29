<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.carousel.index', [
            'carousels' => Carousel::all(),
            'page' => 'Carousel'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel.create', [
            'page' => 'Carousel'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1024'
        ]);

        $fileName = time() . '.' . $request->image->extension();

        $validatedData = [
            'image' => $fileName,
            'visibility' => true
        ];

        Carousel::create($validatedData);


        $request->image->move(public_path('images/carousel-img'), $fileName);

        return redirect('/admin/carousel')->with('success', 'Carousel Berhasil Diupload');
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
    public function update(Request $request, Carousel $gambar_carousel)
    {
        $updatedData = [
            'visibility' => !$gambar_carousel->visibility
        ];
        Carousel::whereId($gambar_carousel->id)->update($updatedData);
        return redirect('/admin/carousel')->with('success', 'Carousel Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $gambar_carousel)
    {

        Carousel::destroy($gambar_carousel->id);
        if (file_exists(public_path('images/carousel-img/' . $gambar_carousel->image))) {
            unlink(public_path('images/carousel-img/' . $gambar_carousel->image));
        }
        return redirect('/admin/carousel')->with('success', 'Carousel Berhasil Dihapus');
    }
}
