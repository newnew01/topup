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

use Carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/topup/{token}', function ($token) {
    if(Carbon::now()->format('dmY') == base64_decode($token)){
        echo 'OK'.Carbon::now()->format('dmY');
    }else{
        echo 'NOT OK'.Carbon::now()->format('dmY');
    }
    //echo Carbon::now()->format('dmY');
});
