<?php
// CategoryController.php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories',
        ]);
    
        $user_id = Auth::id(); // Retrieve authenticated user's ID

        $category = new Category([
            'name' => $request->name,
            'user_id' => $user_id, // Assign the authenticated user's ID
        ]);
    
        $category->save();
    
        return redirect()->route('create_categories')->with('success', 'Category created successfully.');
    }
 

}

