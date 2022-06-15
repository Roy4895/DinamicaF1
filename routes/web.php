<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorsController;
use App\Http\Controllers\Administrador\PagesController;
use App\Http\Controllers\Administrador\UsersController;

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
    return view('dashboard');
});
 

/*
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/

/**Rutas del administrador*/

Route::get('administrador/login',[AdministratorsController::class,'showLoginForm'])->name('administrador/login');
Route::post('administrador/login', [AdministratorsController::class,'authenticate']);
Route::get('administrador/logout', [AdministratorsController::class,'logout'])->name('administrador/logout');


Route::group(['namespace' => 'Administrador','middleware' => 'auth:admin'], function() {

    Route::get('administrador/', [PagesController::class,'home'])->name('administrador/index');
    Route::get('administrador/home', [PagesController::class,'home'])->name('administrador/home');

    Route::get('administrador/usuarios', [UsersController::class,'show'])->name('administrador/usuarios');
    Route::post('administrador/addUsuario', [UsersController::class,'addUsuario'])->name('administrador/addUsuario');
    Route::post('administrador/editUsuario', [UsersController::class,'editUsuario'])->name('administrador/editUsuario');
    Route::post('administrador/updateUsuario', [UsersController::class,'updateUsuario'])->name('administrador/updateUsuario');
    Route::post('administrador/deleteUsuario', [UsersController::class,'deleteUsuario'])->name('administrador/deleteUsuario');

});