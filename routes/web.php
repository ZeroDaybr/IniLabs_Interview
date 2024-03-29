<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Todo\TaskController;
use App\Http\Controllers\ParenthesesController;
use App\Http\Controllers\Animal\AnimalController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Parentheses
Route::get('/parentheses', [ParenthesesController::class, 'index'])->name('parentheses.index');
Route::post('/validate-parentheses', [ParenthesesController::class, 'validateParentheses'])->name('validate.parentheses');

//Shape
Route::get('/shape', [ShapeController::class, 'index'])->name('shape.index');
Route::post('/calculate-area', [ShapeController::class, 'calculateArea'])->name('calculate.area');

// employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::post('/employees/{employee}', [EmployeeController::class, 'update']);

//Animal
Route::get('/polymorphism', [AnimalController::class, 'polymorphismDemo'])->name('polymorphism.index');

// routes/web.php



Route::resource('tasks', TaskController::class);

