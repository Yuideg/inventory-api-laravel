<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\SupplierController;

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
Route::resource("roles",RoleController::class);
Route::resource("products",ProductController::class);
Route::resource("staff",RoleController::class);
Route::resource("payments",PaymentController::class);
Route::resource("orders",OrderController::class);
Route::resource("order_details",OrderDetailController::class);
Route::resource("customers",CustomerController::class);
Route::resource("suppliers",SupplierController::class);
Route::resource("categories",CategoryController::class);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
