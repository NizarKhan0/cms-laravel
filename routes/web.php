<?php


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('landing');
});


Route::get('/admin', function () {
    return view('layouts.backend-user');
});
