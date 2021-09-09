<?php

use App\User;
use App\Store;

Route::get('/', function () {
    return view('web/home');
});

Route::get('/', function () {
    $store = DB::table('store as store')->select('*')->get();
    
    return view('web/home', compact('store'));
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('stores')->group(function() {
    Route::get('index', 'UpdateStore@index');
    Route::post('update', 'UpdateStore@update');
    Route::get('StatusStore', 'UpdateStore@StatusStore');
    Route::get('horario', 'UpdateStore@horario');
    Route::post('updatehorario', 'UpdateStore@updatehorario');

});

Route::prefix('viewproduct')->group(function() {
    Route::get('returnProductStore/{id}', 'ViewProductoStore@returnProductStore');
    Route::get('compra', 'ViewProductoStore@compra');
    Route::post('enviarpedidowhatsapp', 'ViewProductoStore@enviarpedidowhatsapp');  


});

Route::prefix('producto')->group(function() {
    Route::get('index', 'ProductosController@index');
    Route::get('create', 'ProductosController@create');  
    Route::post('register', 'ProductosController@register');  
    Route::post('estado', 'ProductosController@estado');  
    Route::get('show/{id}', 'ProductosController@show');  

});




