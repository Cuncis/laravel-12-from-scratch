<?php

use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    // $ideas = session()->get('ideas', []);

    // $fromDbIdeas = DB::table('ideas')->get();

    // $fromDbIdeas = Idea::where('state', 'pending')->get();
    $fromDbIdeas = Idea::query()
        ->when(request('state'), function ($query, $args) {
            $query->where('state', $args);
        })
        ->get();

    return view('ideas', [
        'fromDbIdeas' => $fromDbIdeas,
    ]);
});

Route::post('/ideas', function () {

    // $ideas = $request->input('ideas');

    // session()->push('ideas', $ideas);

    Idea::create([
        'description' => request('ideas'),
        'state' => 'complete',
    ]);

    return redirect('/');
});

Route::get('/clear-ideas', function () {
    session()->forget('ideas');

    return redirect('/');
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
