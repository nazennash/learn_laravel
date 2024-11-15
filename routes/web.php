<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route:
Route::get('/about', function () {
    return view('about');
});

Route::get('/post/{id}', function ($id) {
    dd($id);
    // return response('Post ' . $id);
})->where('id', '[0-9]+');