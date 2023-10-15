<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');
Route::view('/add-product','pages.admin.add_product');
Route::post('/insert',[productController::class,'insertData']);
Route::get('/',[productController::class,'getData']);
Route::view('/add-category','pages.admin.add_category');
Route::post('/insert-category',[categoryController::class,'addCategory']);
Route::view('/view-product','pages.admin.view_products');