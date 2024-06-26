<?php
use App\Http\Controllers\NoteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
Route::get('/notes', [NoteController::class, 'index'])->name('notes');
Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::patch('/notes/{note}', [NoteController::class, 'update'])->name('notes.update'); 
Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');

Route::get('/create_categories', [CategoryController::class, 'create'])->name('create_categories');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

require __DIR__.'/auth.php';


