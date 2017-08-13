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

Route::post("/adverts","AdvertsContoller@store");

Route::post("/adverts/date","AdvertsContoller@showDate");

Route::get("/test","AdvertsContoller@show");

Route::get("/feed","feedDb@feedMe"); 
