<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about/{name}', function ($name) {
    echo $name;
    return view('about', ['name' => $name]);
    // return view('about');
});

Route::view('/contract','contract');

Route::get('user', [UserController::class, 'getUser']);
Route::get('user/{name}', [UserController::class, 'aboutUser']);