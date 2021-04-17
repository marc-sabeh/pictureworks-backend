<?php

use App\Http\Controllers\UserController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::apiResource('users', UserController::class);
Route::post('/users/append_comment', [UserController::class, 'append_comment']);
// Route::get('/users/{user}', [UserController::class, 'show']);

// Route::get('/users/{id}', 'UsersController@get_user');
// Route::post('/products/insert_supplier_product', 'ProductsController@insert_supplier_product');