<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        $user_id = Auth::id();
        $categories = Category::where('user_id', $user_id)->get();
        return view('categories.create_categories', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user_id = Auth::id();

        $category = new Category([
            'name' => $request->name,
            'user_id' => $user_id,
        ]);

        $category->save();

        return redirect()->route('create_categories')->with('success', 'Category created successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('create_categories')->with('success', 'Category deleted successfully.');
    }
}

