<?php

use App\Http\Controllers\Admin\MeetingController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;  //duita controller same name e
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/home/{id}/edit/{id1}', [StudentController::class, 'index']);  //connect to the controller file 

//for welcome.blade.php(a new navigation bar)
Route::get('/home', [StudentController::class, 'index']);

//when it is in StudentController
//Route::get('/meeting/{id}/edit', [StudentController::class, 'edit']);

//when it is in MeetingController
Route::get('/meeting/{id}/edit', [MeetingController::class, 'edit']);



//from Admin/studentController
Route::get('/student/create', [AdminStudentController::class, 'create']);


Route::get('/signup', [AuthController::class, 'signup']);
Route::get('/login', [AuthController::class, 'login']);
