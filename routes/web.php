<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParenthesesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ParenthesesController::class, 'index']);
Route::post('/validate-parentheses', [ParenthesesController::class, 'validateParentheses'])->name('validate.parentheses');
