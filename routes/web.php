<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OdontologiaController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [OdontologiaController::class, 'index'])->name('register');
Route::get('/odontologia', [OdontologiaController::class, 'index'])->name('odontologia.index');
Route::get('/odontologia/create', [OdontologiaController::class, 'create'])->name('odontologia.create');
Route::post('/odontologia/', [OdontologiaController::class, 'store'])->name('odontologia.store');
Auth::routes();
