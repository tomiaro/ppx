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

Route::get("/adverts","AdvertsContoller@sendAdvert"); 

Route::get("/test",function () {
    return view('advertisors.advertisors_main');
});

Route::post("/adverts","AdvertsContoller@createAdvert");
