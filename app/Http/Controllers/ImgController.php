<?php

namespace App\Http\Controllers;

use App\Models\ImageGalery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;


class ImgController extends Controller
{
    public function index()
    {
        return view('admin.media-galery', [
            'gambar' => ImageGalery::orderBy('id', 'desc')->with('danin')->get()
        ]);
    }
    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg,gif'
        ]);
        
        
        if ($gambar = $request->file('image')) {
    
            $originalPath = 'image/';
            $originalName = $request->name ? $request->name . '.' . $gambar->getClientOriginalExtension() : time() . '.' . $gambar->getClientOriginalExtension();
            $imagePath = $originalPath . $originalName;
    
            $gambar->move($originalPath, $originalName);

            $imageManager = new ImageManager(new Driver());
            $resizedImage = $imageManager->read($originalPath . $originalName);

            $resizedImage->scaleDown(height: 400);
            $resizedname = "Rz". $originalName;
            $resizedImage->save(public_path('image/resize/' . $resizedname));

        }

        $newPath = 'image/resize/';
        $untukThumb = $newPath . $resizedname;

        $test = ImageGalery::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imagePath,
            'image_thumb' => $untukThumb
        ]);

        return redirect()->route('media');
    }

    public function destroy(int $id)
    {
        $gambar = ImageGalery::find($id);

        // dd(Storage::delete($gambar->image));

        if ($gambar) {
            // Delete the image from storage
            Storage::delete($gambar->image);
    
            // Delete the image record from the database
            $gambar->delete();
        }
        return redirect()->route('media');
    }

}
