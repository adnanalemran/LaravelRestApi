<?php

use App\Http\Controllers\API\categoryController;
use Illuminate\Support\Facades\Route;


Route::get("catagories",  [categoryController::class, 'index']);

Route::post("catagories/store",  [categoryController::class, 'store']);