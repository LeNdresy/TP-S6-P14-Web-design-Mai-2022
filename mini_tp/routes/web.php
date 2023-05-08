<?php

use App\Http\Controllers\MyController;
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

Route::get('/', [MyController::class,'Load']);
Route::get('IABlog/detail-ia/SlugIA-', [MyController::class,'DetailIA']);
Route::get('search-IA', [MyController::class,'Load']);
Route::get('go-to-back', [MyController::class,'LoadAjout']);
Route::get('log-out', [MyController::class,'LogOut']);
Route::post('add-new-article', [MyController::class,'Ajout']);
Route::post('login', [MyController::class,'Login']);
