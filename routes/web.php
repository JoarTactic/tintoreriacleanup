<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::post('/logout', function () {
    Session::flush();
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::post('Logout', function () {
    Session::flush();
    Auth::logout();
    return redirect()->route('login');
})->name('Logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes');
Route::get('/clientesCreate', [App\Http\Controllers\ClientesController::class, 'create'])->name('clientesCreate');
Route::post('/clientesStore', [App\Http\Controllers\ClientesController::class, 'store'])->name('clientesStore');
Route::get('/clientesEdit/{id}', [App\Http\Controllers\ClientesController::class, 'edit'])->name('clientesEdit');
Route::put('/clientesUpdate/{id}', [App\Http\Controllers\ClientesController::class, 'update'])->name('clientesUpdate');
Route::delete('/clientesDelete/{id}', [App\Http\Controllers\ClientesController::class, 'destroy'])->name('clientesDelete');


Route::get('/empleados', [App\Http\Controllers\EmpleadosController::class, 'index'])->name('empleados');
Route::get('/empleadosCreate', [App\Http\Controllers\EmpleadosController::class, 'create'])->name('empleadosCreate');
Route::post('/empleadosStore', [App\Http\Controllers\EmpleadosController::class, 'store'])->name('empleadosStore');
Route::get('/empleadosEdit/{id}', [App\Http\Controllers\EmpleadosController::class, 'edit'])->name('empleadosEdit');
Route::put('/empleadosUpdate/{id}', [App\Http\Controllers\EmpleadosController::class, 'update'])->name('empleadosUpdate');
Route::delete('/empleadosDelete/{id}', [App\Http\Controllers\EmpleadosController::class, 'destroy'])->name('empleadosDelete');

Route::get('/prendas', [App\Http\Controllers\PrendasController::class, 'index'])->name('prendas');
Route::get('/prendasCreate', [App\Http\Controllers\PrendasController::class, 'create'])->name('prendasCreate');
Route::post('/prendasStore', [App\Http\Controllers\PrendasController::class, 'store'])->name('prendasStore');
Route::get('/prendasEdit/{id}', [App\Http\Controllers\PrendasController::class, 'edit'])->name('prendasEdit');
Route::put('/prendasUpdate/{id}', [App\Http\Controllers\PrendasController::class, 'update'])->name('prendasUpdate');
Route::delete('/prendasDelete/{id}', [App\Http\Controllers\PrendasController::class, 'destroy'])->name('prendasDelete');
Route::get('/getPrendas/{id}', [App\Http\Controllers\PrendasController::class, 'getPrendas'])->name('getPrendas');


Route::get('/ordenes', [App\Http\Controllers\OrdenesController::class, 'index'])->name('ordenes');
Route::get('/ordenesEdit/{id}', [App\Http\Controllers\OrdenesController::class, 'edit'])->name('ordenesEdit');
Route::post('/setOrden', [App\Http\Controllers\OrdenesController::class, 'store'])->name('setOrden');
Route::post('/setOrdenUpdate/{id}', [App\Http\Controllers\OrdenesController::class, 'update'])->name('setOrdenUpdate');
Route::post('/ordenDeletePrenda/{id}', [App\Http\Controllers\OrdenesController::class, 'destroy'])->name('ordenDeletePrenda');

