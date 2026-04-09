<?php


use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('landing');
});


//backend user

//redirect after login
Route::get('/admin/dashboard', function () {
    return view('layouts.backend-user.dashboard');
})->name('adminDashboard');

// manage backend user
//list
Route::get('/admin/list-backend-user', function () {
    return view('layouts.backend-user.module.user.index');
})->name('backendUserList');
//create
//update
//delete