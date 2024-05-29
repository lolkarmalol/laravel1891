<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\CousinController;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\CompanyController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
















Route::get('/formularioaprendiz', [ApprenticeController::class, 'create']);
Route::post('crearAprendiz', [ApprenticeController::class, 'store'])->name('apprentice.store');

Route::get('/frm_aprendiz', [ApprenticeController::class, 'formularioAprendiz']);
Route::post('/apprentice.store', [ApprenticeController::class, 'apprenticeStore'])->name('apprentice.store');




Route::get('/formularioempresa', [CompanyController::class, 'create']);
Route::post('crearEmpresa', [CompanyController::class, 'store'])->name('company.store');

Route::get('/frmempresa', [CompanyController::class, 'formularioEmpresa']);
Route::post('/company.store', [CompanyController::class, 'companyStore'])->name('company.store');

//------------------------CUADRATICA---------------------------------------------------------------//
Route::get('/frmcuadratica', [ResultController::class, 'create']);
Route::post('crearCuadratica', [ResultController::class, 'store'])->name('calculate.store');


Route::get('/frmcuadratica', [ResultController::class, 'formularioCuadratica']);
Route::post('/calculate.store', [ResultController::class, 'calculateStore'])->name('calculate.store');


//---------------------------------------------------------------------------------------------------//


Route::get('/frmprimos', [CousinController::class, 'formularioCalcularPrimo']);
Route::post('/calcularprimo.store', [CousinController::class, 'calcularPrimoStore'])->name('calcularprimo.store');

//---------------------------------------------------------------------------------------------------//

use App\Http\Controllers\User1Controller;
Route::get('/frmusuario', [User1Controller::class, 'formularioUsuario']);
Route::post('/usuario.store', [User1Controller::class, 'usuarioStore'])->name('usuario.store');


//---------------------------------------------------------------------------------------------------//

// web.php

use App\Http\Controllers\FriendController;
Route::get('/frmamigos', [FriendController::class, 'formularioAmigos']);
Route::post('/amigo.store', [FriendController::class, 'amigoStore'])->name('amigo.store');


//---------------------------------------------------------------------------------------------------//


use App\Http\Controllers\CursoController;

Route::get('curso/lista', [CursoController::class, 'index'])->name('curso.index');
Route::get('curso/create', [CursoController::class, 'create']);
Route::post('curso/store', [CursoController::class, 'store'])->name('cursos.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
//---------------------------------------------------------------------------------------------------//

Route::get('product/listar', [ProductController::class, 'index'])->name('product.index');
Route::get('product/frm_producto',[ProductController::class,'create']);
Route::post('product/crearProducto',[ProductController::class,'store'])->name('produc.store');

//---------------------------------------------------------------------------------------------------//
use App\Http\Controllers\RoleUserController;
Route::get('usuario/asociar_rol',[RoleUserController::class,'asociar']);
Route::post('usuario/asociar_rol/store',[RoleUserController::class,'store'])->name('role_user.store');
