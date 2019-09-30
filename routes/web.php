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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/create-list", "AboutStudent@create");
Route::post("/store-list", "AboutStudent@store");
Route::get("/show-list", "AboutStudent@display");
Route::get("/show-list/{student}", "AboutStudent@show");
Route::get("/show-list/{student}/edit", "AboutStudent@edit");
Route::post("/show-list/{student}/update", "AboutStudent@update");
Route::get("/show-list/{student}/delete", "AboutStudent@delete");
