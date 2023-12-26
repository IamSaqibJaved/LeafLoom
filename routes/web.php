<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/landingpage', function () {
    return view('landingpage');
});


// Route::post('/langingpg','App\Http\Controllers\loginsignupcontroller@store');



Route::get('/addprod', function () {
    return view('addprod');
});

Route::post('/addprod','App\Http\Controllers\AddProdController@addprod');

Route::get('/landingpg', 'App\Http\Controllers\AddProdController@displayAllUsers');


Route::get('/test', function () {
    return view('test');
});


Route::get('/showbycategory/{category}', 'App\Http\Controllers\AddProdController@showCategory');


Route::get('/showbytype/{type}', 'App\Http\Controllers\AddProdController@showtype');

Route::get('/showbyingredient/{ingredient}', 'App\Http\Controllers\AddProdController@showingredient');