<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Student;


Route::get('/', function () {
    return view('welcome');
});






Route::get('/sample', [SampleController::class, 'index']);

Route::get('/Getstudent', [Students::class, 'index']);
Route::get('/Getstudent', [Student::class, 'index']);






Route::get('/add-customer', [CustomerController::class, 'addCustomer']);
Route::post('/store-customer', [CustomerController::class, 'store']);
Route::get('/get-customer', [CustomerController::class, 'showCustomer']);
Route::get('/edit-customer/{id}', [CustomerController::class, 'editCustomer']);
Route::put('/update-customer/{id}', [CustomerController::class, 'updateCustomer']);
Route::delete('/delete-customer/{id}', [CustomerController::class, 'deleteCustomer']);

