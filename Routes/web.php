<?php
use Illuminate\Support\Facades\Route;
use Modules\crud\Http\Controllers\crudcontroller;
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

Route::prefix('crud')->group(function() {
    Route::get('path',function()
{
    echo "hello";
});
    Route::get('adddata',[crudcontroller::class,'add']);

    Route::post('adds',[crudcontroller::class,'insert']);

    Route::get('index',[crudcontroller::class,'show']);

    Route::get('update/{id}',[crudcontroller::class,'edit']);

    Route::post('update',[crudcontroller::class,'update']);

    Route::get('delete/{id}',[crudcontroller::class,'delete']);




});



