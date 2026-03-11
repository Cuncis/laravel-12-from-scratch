<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Helloo, ',
        'name' => request('name', 'Guest'),
        'tasks' => ['Go to the store', 'Go to the bank', 'Go to the post office'],
    ]);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
