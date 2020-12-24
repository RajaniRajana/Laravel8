<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\Rolecheck;
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

Route::middleware([rolecheck::class])->group(function () {
    return view('dashboard');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/list', function () {
//     return view('list');
// })->name('list');

// Route::middleware(['auth:sanctum', 'verified'])->get('/task', function () {
//     return view('task');
// })->name('task');

Route::middleware(['auth:sanctum'])->group(function () {
Route::get('dashboard', function () {return view('dashboard');})->name('dashboard');
Route::post('index',[AdminController::class,'index']);
Route::get('list',[AdminController::class,'list'])->name('list');
Route::get('delete/{id}',[AdminController::class,'delete'])->name('delete');
Route::get('task',[AdminController::class,'task'])->name('task');
Route::post('gettask',[AdminController::class,'gettask'])->name('gettask');
});
