<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuliahController;


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
    return view('index');
});

Route::get('/profileDzaka', [ProfileController::class, 'profil1']);
Route::get('/profileIzamul', [ProfileController::class, 'profil2']);
Route::get('/curhat-kuliah', [KuliahController::class, 'kuliah']);




