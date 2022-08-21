<?php

use Illuminate\Support\Facades\Route;
use\App\Models\Customer;
use\App\Http\Controllers\CustomerController;

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
    return view('index');
});


// Route::get('/customers', function () {
//    $customer=Customer::all();
//    echo '<pre>';
//    // print_r($customer);
//    print_r($customer->toArray());

// });


Route::get('/customer/create', [CustomerController::class,'create'])->name('customer.create');

Route::post('/customer', [CustomerController::class,'store']);
Route::get('/customer/show', [CustomerController::class,'showCustomer']);
Route::get('/customer/delete/{id}', [CustomerController::class,'deleteCustomer'])->name('customer.delete');
Route::get('/customer/edit/{id}', [CustomerController::class,'editCustomer'])->name('customer.edit');
Route::post('/customer/update/{id}', [CustomerController::class,'updateCustomer'])->name('customer.update');



