<?php

use App\Http\Controllers\API\CarritoController;
use App\Http\Controllers\API\CategoriaController;
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\ProductoController;
use App\Http\Controllers\API\VentaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*
Route::get('customer',[CustomerController::class,'index']);
Route::post('customer',[CustomerController::class,'store']);
Route::get('customer/{customer}',[CustomerController::class,'show']);
Route::put('customer/{customer}',[CustomerController::class,'update']);
Route::delete('customer/{customer}',[CustomerController::class,'destroy']);

Route::get('producto',[ProductoController::class,'index']);
Route::post('producto',[ProductoController::class,'store']);
Route::get('producto/{producto}',[ProductoController::class,'show']);
Route::put('producto/{producto}',[ProductoController::class,'update']);
Route::delete('producto/{producto}',[ProductoController::class,'destroy']);

Route::get('venta',[VentaController::class,'index']);
Route::post('venta',[VentaController::class,'store']);
Route::get('venta/{venta}',[VentaController::class,'show']);
Route::put('venta/{venta}',[VentaController::class,'update']);
Route::delete('venta/{venta}',[VentaController::class,'destroy']);

Route::get('categoria',[CategoriaController::class,'index']);
Route::post('categoria',[CategoriaController::class,'store']);
Route::get('categoria/{categoria}',[CategoriaController::class,'show']);
Route::put('categoria/{categoria}',[CategoriaController::class,'update']);
Route::delete('categoria/{categoria}',[CategoriaController::class,'destroy']);

Route::get('carrito',[CarritoController::class,'index']);
Route::post('carrito',[CarritoController::class,'store']);
Route::get('carrito/{carrito}',[CarritoController::class,'show']);
Route::put('carrito/{carrito}',[CarritoController::class,'update']);
Route::delete('carrito/{carrito}',[CarritoController::class,'destroy']);
*/

Route::apiResource('customer',CustomerController::class);
Route::apiResource('producto',ProductoController::class);
Route::apiResource('carrito',CarritoController::class);
Route::apiResource('categoria',CategoriaController::class);
Route::apiResource('venta',VentaController::class);