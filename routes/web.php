<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParenthesesController;
use App\Http\Controllers\ShapeController;

Route::get('/', function () {
    return view('welcome');
});

//Parentheses
Route::get('/parentheses', [ParenthesesController::class, 'index']);
Route::post('/validate-parentheses', [ParenthesesController::class, 'validateParentheses'])->name('validate.parentheses');

//Shape
Route::get('/shape', [ShapeController::class, 'index']);
Route::post('/calculate-area', [ShapeController::class, 'calculateArea'])->name('calculate.area');
