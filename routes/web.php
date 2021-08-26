<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenceController;

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

Route::get('/kakeibo/{id}/expences',[ExpenceController::class,'index'])->name('expences.index');
Route::get('/kakeibo/{id}/expences/create',[ExpenceController::class,'showCreateForm'])->name('tasks.create');
Route::post('/kakeibo/{id}/expences/create',[ExpenceController::class,'create']);
