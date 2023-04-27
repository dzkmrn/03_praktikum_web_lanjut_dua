<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KuliahController;
use App\Http\Controllers\CurhatanController;


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

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/', function () {
        return view('index');
    });
    Route::get('/profileDzaka', [ProfileController::class, 'profil1']);
    Route::get('/profileIzamul', [ProfileController::class, 'profil2']);
    Route::get('/curhat-kuliah', [KuliahController::class, 'kuliah']);
    Route::get('/curhatan1', [CurhatanController::class, 'curhatan1']);
    Route::get('/curhatan2', [CurhatanController::class, 'curhatan2']);    
});

Auth::routes();


//cide hkjjkl




