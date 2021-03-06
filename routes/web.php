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
    return view('welcome');
});

Route::post('/webhook/lineMsg', 'LineMessageController@callback');
Route::get('ok', 'LineMessageController@ok');

Route::get('payment', 'ECPayController@payment');
Route::post('payment/ECPay', 'ECPayController@ECPay');

// API Collection 
Route::prefix('collection')->group(function(){
    Route::get('dogImg', 'APICollectionController@DogApi');
});

Route::get('dog', 'VisualApiController@dog');