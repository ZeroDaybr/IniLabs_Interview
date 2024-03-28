<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Todo\TaskController;
use App\Http\Controllers\ParenthesesController;
use App\Http\Controllers\Animal\AnimalController;

Route::get('/', function () {
    return view('welcome');
});

//Parentheses
Route::get('/parentheses', [ParenthesesController::class, 'index']);
Route::post('/validate-parentheses', [ParenthesesController::class, 'validateParentheses'])->name('validate.parentheses');

//Shape
Route::get('/shape', [ShapeController::class, 'index']);
Route::post('/calculate-area', [ShapeController::class, 'calculateArea'])->name('calculate.area');

// employees
Route::get('/employees', [EmployeeController::class, 'index']);
Route::post('/employees/{employee}', [EmployeeController::class, 'update']);

//Animal
Route::get('/polymorphism-demo', [AnimalController::class, 'polymorphismDemo']);

// routes/web.php



Route::resource('tasks', TaskController::class);

