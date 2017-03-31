<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['middleware' => 'auth'], function(){
    Route::get("/sellers/{seller}/delete", "SellerController@destroy");
    Route::resource("sellers", "SellerController");

    Route::get("/users/{user}/delete", "UserController@destroy");
    Route::resource("users", "UserController");
});
