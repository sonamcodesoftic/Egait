<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\StudentController;

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
    // return view('students/index');
    // return view('students/showdata');
    // return view('welcome');
});
//  Route::resource('students','App\Http\Controllers\StudentController');
 Route::view('add','students/index');
//  Route::post('add',[StudentController::class,'addData']);

// add data in database
Route::post('add',"App\Http\Controllers\StudentController@addData");

// Show data from database
Route::get('users',"App\Http\Controllers\StudentController@index");

// update data
Route::get('update/{id}',"App\Http\Controllers\StudentController@update");

//save edit data

Route::post('submit/{id}',"App\Http\Controllers\StudentController@posteditdata");

// Route::post('/action_page',"App\Http\Controllers\new@create");