<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculOperations;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Add/{num1,num2}',[CalculOperations::class,'Add.']);
Route::get('/Subtract/{num1,num2}',[CalculOperations::class,'Subtract']);
Route::get('/Multiply/{num1,num2}',[CalculOperations::class,'Multiply']);
Route::get('/Divide/{num1,num2}',[CalculOperations::class,'Divide']);
Route::get('/Modulus/{num1,num2}',[CalculOperations::class,'Modulus']);
Route::get('/Square/{num1}',[CalculOperations::class,'Square']);
Route::get('/Percentage/{num1,num2}',[CalculOperations::class,'Percentage']);
