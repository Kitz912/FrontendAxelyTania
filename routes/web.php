<?php

use App\Http\Livewire\Tareas;
use App\Http\Livewire\Contador;
use App\Http\Livewire\Empresas;
use App\Http\Livewire\UserIndex;
use App\Http\Livewire\UsersIndex;
use App\Http\Livewire\AsignarTarea;
use App\Http\Livewire\EditarTareas;
use App\Http\Livewire\EditarEmpresa;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\EditarEmpleados;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AmiiboController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;

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

/*Route::get('/login', function () {
    return view('login');
});*/

Route::get('/login', [LoginController::class,'show']);
Route::get('/home', [UsuarioController::class,'index']);
Route::get('/productos', [ProductoController::class,'producto']);
Route::get('/amiibo', [AmiiboController::class,'amiibo']);
Route::get('/asset', [AssetController::class,'index2']);
Route::get('/contador',Contador::class);

Route::get('/usuarios',UserIndex::class);

////////////////////////////////EXAMEN METODO/////////////////////////
Route::get('/UsuariosIndex',UsersIndex::class);
Route::get('/EmpresaIndex',Empresas::class);
Route::get('/TareasIndex',Tareas::class);
Route::get('/TareaAsignadaIndex',AsignarTarea::class);
//////////////////////////////PUT//////////////////////////////
Route::get('/TareasIndex/{id}/editar',EditarTareas::class);
Route::get('/EmpresaIndex/{id}/editar',EditarEmpresa::class);
Route::get('/UsuariosIndex/{id}/editar',EditarEmpleados::class);


