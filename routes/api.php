<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DummyAPIController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\UserController;

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
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's
    //Route::apiResource("member",[MemberController::class]);
    Route::get('data',[DummyAPIController::class,'getData']);
// Route::get('list/{id?}',[DeviceController::class,'list']);

Route::get('list',[DeviceController::class,'list']);
Route::get('list/{id}',[DeviceController::class,'listParams']);


Route::post('add',[DeviceController::class,'add']);
Route::put('update',[DeviceController::class,'update']);

Route::get('search/{name}',[DeviceController::class,'search']);
Route::delete('delete/{id}',[DeviceController::class,'delete']);


Route::post('save',[DeviceController::class,'testData']);
    });

// Route::get('data',[DummyAPIController::class,'getData']);
// // Route::get('list/{id?}',[DeviceController::class,'list']);

// Route::get('list',[DeviceController::class,'list']);
// Route::get('list/{id}',[DeviceController::class,'listParams']);


// Route::post('add',[DeviceController::class,'add']);
// Route::put('update',[DeviceController::class,'update']);

// Route::get('search/{name}',[DeviceController::class,'search']);
// Route::delete('delete/{id}',[DeviceController::class,'delete']);


// Route::post('save',[DeviceController::class,'testData']);

//Route::apiResource("member",[MemberController::class]);

Route::post("login",[UserController::class,'index']);
