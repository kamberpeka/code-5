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

Route::namespace('App\Http\Controllers')
     ->group(function () {


         Route::get('/', [
             'uses' => 'MessageController@create',
             'as' => 'message.create'
         ]);

         Route::post('/', [
             'uses' => 'MessageController@store',
             'as' => 'message.store'
         ]);

         Route::get('/success', function () {
             return view('message.success');
         })->name('message.success');


         Route::get('/failed', function () {
             return view('message.failed');
         })->name('message.failed');

     });
