<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        if (Auth::check() && Auth::user()->role === 1) {
            return view('categories.index')->with('categories', $categories);
        }
        return view('categories.catalogue')->with('categories', $categories);
    }

    public function create()
    {
        $categories = Category::all();
        return view('categories.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'max:511',
            'parent_id' => 'nullable|numeric',
        ]);

        $category = Category::create($validated);
        return redirect()->route('categories.index');
    }
}
