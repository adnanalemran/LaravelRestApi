<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/', function () {
    return ('Welcome to api route');
});

Route::get('about', function () {
    return ('About page');
})->name("about");
