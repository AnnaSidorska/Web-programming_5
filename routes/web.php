<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@show')->name('index');
Route::get('/index', 'App\Http\Controllers\MainController@show')->name('index');
Route::get('/subscription', 'App\Http\Controllers\MainController@subscription')->name('subscription');
Route::get('/trainers', 'App\Http\Controllers\MainController@trainers')->name('trainers');
Route::get('/about_us', 'App\Http\Controllers\MainController@about_us')->name('about_us');
Route::get('/contacts', 'App\Http\Controllers\MainController@contacts')->name('contacts');

Route::get('/index/submit', 'App\Http\Controllers\FormController@getHelp')->name('index-form');
Route::get('/subscription/submit', 'App\Http\Controllers\FormController@getHelp')->name('subscription-form');
Route::get('/subscription/submit1', 'App\Http\Controllers\FormController@getSub')->name('subscription-form1');
Route::get('/trainers/submit', 'App\Http\Controllers\FormController@getHelp')->name('trainers-form');
Route::get('/contacts/submit', 'App\Http\Controllers\FormController@getHelp')->name('contacts-form');
