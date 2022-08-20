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
    return view('welcome');
});


// Route::get('/customers', function () {
//    $customer=Customer::all();
//    echo '<pre>';
//    // print_r($customer);
//    print_r($customer->toArray());

// });


Route::get('/customer', [CustomerController::class,'index']);

Route::post('/customer', [CustomerController::class,'store']);

