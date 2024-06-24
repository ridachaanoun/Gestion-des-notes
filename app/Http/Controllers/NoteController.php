<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Category;

class NoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Note::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('dashboard')->with('success', 'Note created successfully.');
    }

    public function index(Request $request)
    {
        $user_id = auth()->id();
        $categories = Category::where('user_id', $user_id)->get();

        $category_id = $request->input('category_id');
        $title = $request->input('title');

        $notes = Note::where('user_id', $user_id)
            ->when($category_id, function ($query, $category_id) {
                return $query->where('category_id', $category_id);
            })
            ->when($title, function ($query, $title) {
                return $query->where('title', 'like', '%' . $title . '%');
            })
            ->get();

        return view('notes.notes', compact('notes', 'categories', 'category_id', 'title'));
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes')->with('success', 'Note deleted successfully.');
    }

    public function edit(Note $note)
    {
        $user_id = auth()->id();
        $categories = Category::where('user_id', $user_id)->get();

        return view('notes.edit', compact('note', 'categories'));
    }

    public function update(Request $request, Note $note)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        $note->update([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('notes')->with('success', 'Note updated successfully.');
    }
}
