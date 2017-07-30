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

//Route::get('/', function () {
//    //return 'user';
////    $data=[
////        '0'=>[
////            'name'=>'Welcome',
////            'city'=>'Dhaka',
////            'country'=>'Bangladesh',
////        ]
////    ];
////    return $data;
//    return view('demo');
//});

Route::get('/','WelcomeController@login');
Route::get('/registration','WelcomeController@registration');
