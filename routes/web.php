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


Route::get('/test', function () {

    $response = Telegram::getMe();
    dd($response);
});

//
Route::post('/458364705:AAHILj99Dn47JP1mbqpCtwpZbwOyRgJrcis/webhook', function () {
    $updates = Telegram::commandsHandler(true);

    return 'ok';
});