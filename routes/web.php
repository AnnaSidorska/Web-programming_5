<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\MainController@show')->name('index');
Route::get('/index', 'App\Http\Controllers\MainController@show')->name('index');
Route::get('/subscription', 'App\Http\Controllers\MainController@subscription')->name('subscription');
Route::get('/trainers', 'App\Http\Controllers\MainController@trainers')->name('trainers');
Route::get('/about_us', 'App\Http\Controllers\MainController@about_us')->name('about_us');
Route::get('/contacts', 'App\Http\Controllers\MainController@contacts')->name('contacts');

Route::post('/index/submit', 'App\Http\Controllers\ContactController@indexsubmit')->name('index-form');
Route::post('/subscription/submit', 'App\Http\Controllers\ContactController@subscriptionsubmit')->name('subscription-form');
Route::post('/trainers/submit', 'App\Http\Controllers\ContactController@trainerssubmit')->name('trainers-form');

Route::post('/subscription/submit/second', 'App\Http\Controllers\HelpController@subscriptionsubmit')->name('subscription-forms');
Route::post('/contacts/submit', 'App\Http\Controllers\HelpController@contactsubmit')->name('contacts-forms');

