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

Route::get('/cv', function () {
    return view('cv');
});

Route::resource('/curriculum', 'CurriculumController');
Route::get('/curriculum/{id}/confirmDelete','CurriculumController@confirmDelete');

Route::resource('/contacto', 'ContactoController');
Route::post('/contacto/confirmSendMail','ContactoController@confirmSendMail');
Route::post('/contacto/SendMail','ContactoController@SendMail');

Route::get('/programas', function () {
    return view('programas.programas');
});
 
