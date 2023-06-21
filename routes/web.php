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



// Question 1
//Route::post('/hello',[\App\Http\Controllers\demoController::class,'demoAction']);


// Question 2
//Route::get('/hello',[\App\Http\Controllers\demoController::class,'demoAgent']);


// Question 3
//Route::get('/hello',[\App\Http\Controllers\demoController::class,'demoAgent']);



// Question 4
//Route::get('/hello',[\App\Http\Controllers\demoController::class,'demoJeson']);



// Question 5
//Route::post('/hello',[\App\Http\Controllers\demoController::class,'demoFile']);


// Question 6
//Route::get('/hello',[\App\Http\Controllers\demoController::class,'demoCookie']);


// Question 6
Route::get('/submit',[\App\Http\Controllers\demoController::class,'demoEmail']);
