<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OdontologiaController;
use App\Http\Controllers\PerfilController;

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


// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/', [OdontologiaController::class, 'index'])->name('odontologias');
Route::get('/odontologias', [OdontologiaController::class, 'index'])->name('odontologia.index');
Route::get('/odontologias/create', [OdontologiaController::class, 'create'])->name('odontologia.create');
Route::post('/odontologias/', [OdontologiaController::class, 'store'])->name('odontologia.store');
Route::get('/odontologias/{odontologia}', [OdontologiaController::class, 'show'])->name('odontologia.show');
Route::get('/odontologias/{odontologia}/edit', [OdontologiaController::class, 'edit'])->name('odontologia.edit');
Route::put('/odontologias/{odontologia}', [OdontologiaController::class, 'update'])->name('odontologia.update');
Route::delete('/odontologias/{odontologia}', [OdontologiaController::class, 'destroy'])->name('odontologia.destroy');

Auth::routes();
//perfiles
Route::get('/perfiles/{perfil}', [PerfilController::class,'show']) -> name('perfiles.show');
Route::get('/perfiles/{perfil}/edit', [PerfilController::class,'edit']) -> name('perfiles.edit');
Route::put('/perfiles/{perfil}', [PerfilController::class,'update']) -> name('perfiles.update');
