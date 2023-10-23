<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calcs/{value1}/{operator}/{value2}', function ($value1, $operator, $value2) {
    return view('message.calc', 
    [
        'value1' => $value1, 
        'operator' => $operator, 
        'value2' => $value2
    ]);
});
