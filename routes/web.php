<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {

    $ideas = session()->get('ideas', []);

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function (Request $request) {

    $ideas = $request->input('ideas');

    session()->push('ideas', $ideas);

    return redirect('/')->with('message', 'Your idea has been saved!');
});

Route::get('/clear-ideas', function () {
    session()->forget('ideas');

    return redirect('/');
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
