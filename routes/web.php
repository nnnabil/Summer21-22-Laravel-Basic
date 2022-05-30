<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;
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

Route::get('/',[PagesController::class, 'index'])->name('home');
Route::get('/profile',[PagesController::class, 'profile'])->name('profile');

//Student routes
Route::get('/studentList',[StudentController::class, 'studentList'])->name('studentList');
Route::get('/studentEdit/{name}/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');

Route::get('/studentCreate',[StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');



