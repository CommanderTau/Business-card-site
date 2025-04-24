<?php

namespace App\Http\Controllers\Admin;

class PageController extends Controller
{

    public function show($slug)
    {
        $page = Page::where('slug', $slug)->firstOrFail();
        return view('pages.show', compact('page'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'required|string|unique:pages'
        ]);
    
        Page::create($validated);
    
        return redirect()->route('admin.pages.index')
            ->with('success', 'Страница создана!');
    }

    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
    }
}
