<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
// use App\Models\Category;

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


    public function index()
    {
        // Fetch notes associated with the authenticated user
        $user_id = auth()->id();
        $notes = Note::where('user_id', $user_id)->get();
    
        // Return the view with the fetched notes
        return view('notes', compact('notes'));
    }
    public function destroy(Note $note)
    {
        // Perform deletion logic here
        $note->delete();

        return redirect()->route('notes')->with('success', 'Note deleted successfully.');
    }
}

