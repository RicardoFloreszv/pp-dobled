<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PermisoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:api', 'permisos'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware(['auth:api', 'permisos'])->get('/user/{id}', function (Request $request, string $id) {
    return 'User '.$id;
});


Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function (){
    Route::post('/logout', [AuthController::class, 'logout']);
});



Route::apiResource('/categorias', CategoriaController::class);
Route::apiResource('/permiso', PermisoController::class);


