<?php

use Illuminate\Support\Facades\Route;

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
    //return view('welcome');
    return view('home');
});

Route::post('send_mail', function () {
    return 'Mensagem enviada!';
});


/**
 * Manutenção
 */
Route::get('/admin/down', function() {
    return Artisan::call('down');
});

Route::get('/admin/up', function() {
    return Artisan::call('up');
});