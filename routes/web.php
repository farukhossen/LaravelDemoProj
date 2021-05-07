<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return redirect('show');
});

Route:: get('show',[ProductController::class, 'index']);
Route:: post('product',[ProductController::class, 'create']);
Route:: get('new',[ProductController::class, 'new']);
Route:: post('edit',[ProductController::class, 'update']);
Route:: get('edit/{id}',[ProductController::class, 'edit']);
Route:: get('delete/{id}',[ProductController::class, 'destroy']);
