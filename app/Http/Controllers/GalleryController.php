<?php

namespace App\Http\Controllers;

use App\Models\GalleryImage;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = GalleryImage::all();
        return view('gallery.index', compact('images'));
    }

    public function adminIndex()
    {
        $images = GalleryImage::all();
        return view('admin.gallery.index', compact('images'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'nullable',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        GalleryImage::create([
            'title' => $validated['title'],
            'image_path' => $imagePath,
            'description' => $validated['description'],
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Image added successfully');
    }

    public function destroy(GalleryImage $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Image deleted successfully');
    }
}