<?php

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


// Index
Route::get('/', function () {
    $ideas = Idea::all();

    return view('ideas.index', [
        'ideas' => $ideas
    ]);
});

// Show
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', [
        'idea' => $idea
    ]);
});

// Edit
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea
    ]);
});

// Update
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description'),
    ]);
    return redirect('/ideas/' . $idea->id);
});

// Store
Route::post('/ideas', function () {
    Idea::create([
        'description' => request('ideas'),
        'state' => 'pending',
    ]);

    return redirect('/');
});

// Destroy
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/');
});