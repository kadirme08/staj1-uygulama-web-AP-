<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {


});


Route::post('/auth/register',[AuthController::class,'createUser']);
Route::post('/auth/login',[AuthController::class,'loginUser']);

Route::get('/home', [TestController::class,'show'])->middleware('auth:sanctum');
Route::post('/home/post',[TestController::class,'Post']);
Route::put('/home/update/{id}',[TestController::class,'update']);
Route::delete('/home/delete/{id}',[TestController::class,'delete']);




