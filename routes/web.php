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
    $customers = DB::select('select * from sales.customers where customer_id >= ? and customer_id <= ?', [581, 600]);
    return view('welcome', ['customers' => $customers]);
});
