<?php

use Illuminate\Support\Facades\Route;

// Página principal
Route::get('/', function () {
    return view('main');
});

// Otras páginas
Route::get('/books', function () {
    return view('books');
});

Route::get('/authors', function () {
    return view('authors');
});

Route::get('/publishers', function () {
    return view('publishers');
});

use Illuminate\Http\Request;

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    return view('contact_result', ['data' => $request->all()]);
});
