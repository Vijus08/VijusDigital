<?php

Route::view('/', 'inicio')->name('Inicio');
Route::view('/conocenos', 'conocenos')->name('Conocenos');
Route::view('/servicios', 'servicios')->name('Servicios');
Route::view('/portafolio', 'portafolio')->name('Portafolio');
Route::view('/contactanos', 'contactanos')->name('Contactanos');

Route::post('contactanos', 'controladordatos@store');

//Rute::view("/pedidos", 'pedidos')->name('pedidos');
Route::get('/pedidos', 'controladorbd');