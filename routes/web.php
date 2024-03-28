<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParenthesesController;
use App\Http\Controllers\ShapeController;
use App\Http\Controllers\EmployeeController;

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

// routes/web.php

use App\Http\Controllers\Animal\AnimalController;

Route::get('/polymorphism-demo', [AnimalController::class, 'polymorphismDemo']);
