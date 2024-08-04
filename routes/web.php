<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Ведутся тех. работы!";
});

Route::get('/main', 'App\Http\Controllers\MainController@index')->name('main.index');

Route::get('/lists', 'App\Http\Controllers\ListController@index')->name('list.index');
Route::get('/lists/create', 'App\Http\Controllers\ListController@create')->name('list/create.create');
Route::post('/lists', 'App\Http\Controllers\ListController@store')->name('list.store');
Route::get('/lists/{list}', 'App\Http\Controllers\ListController@show')->name('list.show');
Route::get('/lists/{list}/edit', 'App\Http\Controllers\ListController@edit')->name('list.edit');
Route::patch('/lists/{list}', 'App\Http\Controllers\ListController@update')->name('list.update');
Route::delete('/lists/{list}', 'App\Http\Controllers\ListController@destroy')->name('list.delete');

Route::get('/contacts', 'App\Http\Controllers\ContactController@index')->name('contact.index');
Route::get('/contacts/create', 'App\Http\Controllers\ContactController@create')->name('contact/create.create');
Route::post('/contacts', 'App\Http\Controllers\ContactController@store')->name('contact.store');

Route::get('/programs', 'App\Http\Controllers\ProgramController@index')->name('program.index');
Route::post('/programs', 'App\Http\Controllers\ProgramController@store')->name('program.store');

Route::get('/records', 'App\Http\Controllers\RecordController@index')->name('record.index');
Route::get('/records/{list_s}', 'App\Http\Controllers\RecordController@show')->name('record.show');
Route::get('/records/{list_s}/edit', 'App\Http\Controllers\RecordController@edit')->name('record.edit');
Route::patch('/records/{list_s}', 'App\Http\Controllers\RecordController@update')->name('record.update');
