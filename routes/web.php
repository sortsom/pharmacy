<?php

use App\Http\Controllers\Admin\EmployeeController;
use Illuminate\Support\Facades\Auth;
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
    return view('admin.home');
});
Route::group(['prefix' => 'admin', 'as' => 'admin.'],function (){
    Route::resource('employees', EmployeeController::class);
    Route::resource('customers',\App\Http\Controllers\Admin\CustomerController::class);
    Route::resource('supplies',\App\Http\Controllers\Admin\SuppliesController::class);
    Route::resource('categories',\App\Http\Controllers\Admin\CategoiesController::class);
    Route::resource('units',\App\Http\Controllers\Admin\UnitsController::class);
    Route::resource('orders',\App\Http\Controllers\Admin\OrdersController::class);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




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
