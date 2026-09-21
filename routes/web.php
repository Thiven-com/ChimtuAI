<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/delete-account', function () {
    return view('delete-account');
});

