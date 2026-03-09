<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'greeting' => 'Helloo, ',
        'name' => request('name', 'Guest'),
    ]);
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');
