<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculationController;

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
    return view('message.calculation', 
    [
        'value1' => $value1, 
        'operator' => $operator, 
        'value2' => $value2
    ]);
});

Route::get('/contoroller/calcs/{value1}/{operator}/{value2}', [CalculationController::class, 'calculation']);
