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
    return view('admins.home');
});
Route::get('/product',function (){
    return view('admins.products.product');
});
Route::get('/employee',function (){
    return view('admins.employees.employee');
});
Route::get('/employees',function (){
    return view('admins.employees.employeelist');
});
Route::get('/customer',function (){
    return view('admins.customers.customer');
});
Route::get('/customers',function (){
    return view('admins.customers.customerlist');
});
Route::get('/supplier',function (){
    return view('admins.supplies.supplier');
});
Route::get('/suppliers',function (){
    return view('admins.supplies.supplieslist');
});
Route::get('/category',function (){
    return view('admins.medicine.category');
});
Route::get('/categories',function (){
    return view('admins.medicine.categorylist');
});
Route::get('/unit',function (){
    return view('admins.medicine.unit');
});
Route::get('/units',function (){
    return view('admins.medicine.unitlist');
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
