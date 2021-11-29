<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/*
Route::get('/', function () {

    $user = Auth::user();

    return view('auth.login');
});

Auth::routes();

Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
Route::resource('user', App\Http\Controllers\UserController::class);

Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//GET, POST, PUT, DELETE USERS
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index')->middleware('perfil:1');
Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/users/store', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/users/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/users/destroy/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/show/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

Route::get('/encargadosgs', [App\Http\Controllers\EncargadosgController::class, 'index'])->name('encargadosgs.index')->middleware('perfil:2');
Route::get('/encargadosg/create', [App\Http\Controllers\EncargadosgController::class, 'create'])->name('encargadosg.create');
Route::post('/encargadosgs/store', [App\Http\Controllers\EncargadosgController::class, 'store'])->name('encargadosgs.store');
Route::get('/encargadosgs/edit/{id}', [App\Http\Controllers\EncargadosgController::class, 'edit'])->name('encargadosgs.edit');
Route::put('/encargadosgs/update/{id}', [App\Http\Controllers\EncargadosgController::class, 'update'])->name('encargadosgs.update');
Route::delete('/encargadosgs/destroy/{id}', [App\Http\Controllers\EncargadosgController::class, 'destroy'])->name('encargadosgs.destroy');
Route::get('/encargadosgs/show/{id}', [App\Http\Controllers\EncargadosgController::class, 'show'])->name('encargadosgs.show');

Route::get('/configuracions', [App\Http\Controllers\ConfiguracionController::class, 'index'])->name('configuracions.index')->middleware('perfil:2');
Route::get('/configuracion/create', [App\Http\Controllers\ConfiguracionController::class, 'create'])->name('configuracions.create');
Route::post('/configuracions/store', [App\Http\Controllers\ConfiguracionController::class, 'store'])->name('configuracions.store');
Route::get('/configuracions/edit/{id}', [App\Http\Controllers\ConfiguracionController::class, 'edit'])->name('configuracions.edit');
Route::put('/configuracions/update/{id}', [App\Http\Controllers\ConfiguracionController::class, 'update'])->name('configuracions.update');
Route::delete('/configuracions/destroy/{id}', [App\Http\Controllers\ConfiguracionController::class, 'destroy'])->name('configuracions.destroy');
Route::get('/configuracions/show/{id}', [App\Http\Controllers\ConfiguracionController::class, 'show'])->name('configuracions.show');

Route::get('/compromisos', [App\Http\Controllers\CompromisoController::class, 'index'])->name('compromisos.index')->middleware('perfil:2');
Route::get('/compromisos/create', [App\Http\Controllers\CompromisoController::class, 'create'])->name('compromisos.create');
Route::post('/compromisos/store', [App\Http\Controllers\CompromisoController::class, 'store'])->name('compromisos.store');
Route::get('/compromisos/edit/{id}', [App\Http\Controllers\CompromisoController::class, 'edit'])->name('compromisos.edit');
Route::put('/compromisos/update/{id}', [App\Http\Controllers\CompromisoController::class, 'update'])->name('compromisos.update');
Route::delete('/compromisos/destroy/{id}', [App\Http\Controllers\CompromisoController::class, 'destroy'])->name('compromisos.destroy');
Route::get('/compromisos/show/{id}', [App\Http\Controllers\CompromisoController::class, 'show'])->name('compromisos.show');

Route::get('/aliados', [App\Http\Controllers\AliadoController::class, 'index'])->name('aliados.index')->middleware('perfil:2');
Route::get('/aliado/create', [App\Http\Controllers\AliadoController::class, 'create'])->name('aliado.create');
Route::post('/aliados/store', [App\Http\Controllers\AliadoController::class, 'store'])->name('aliados.store');
Route::get('/aliados/edit/{id}', [App\Http\Controllers\AliadoController::class, 'edit'])->name('aliados.edit');
Route::put('/aliados/update/{id}', [App\Http\Controllers\AliadoController::class, 'update'])->name('aliados.update');
Route::delete('/aliados/destroy/{id}', [App\Http\Controllers\AliadoController::class, 'destroy'])->name('aliados.destroy');
Route::get('/aliados/show/{id}', [App\Http\Controllers\AliadoController::class, 'show'])->name('aliados.show');
