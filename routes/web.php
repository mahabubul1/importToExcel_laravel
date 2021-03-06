<?php

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



Route::get("/", "CustomerController@index");
Route::post("/customer/save", "CustomerController@save");
Route::get("/excelImport", "ExcelController@get");
Route::get("/delete", "CustomerController@deleteAll");
Route::post("/import/file", "ExcelController@PostImport");
Route::get("/export", "ExcelController@Export");

