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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/fullwidth', function () {
    return view('fullwidth');
});

Route::get('/animals', 'Animals@index');

Route::get('/animals/create', 'Animals@create');
Route::post('/animals/create', 'Animals@createPet');

Route::get('/owners', 'Owners@index');

Route::get('/owners/create', 'Owners@create');
Route::post('/owners/create', 'Owners@createOwner');

Route::get('/owners/{owner}', 'Owners@show');

Route::get('/animals/{animal}', 'Animals@show');

Route::get('/animals/{animal}/edit', 'Animals@edit');
Route::post('/animals/{animal}/edit', 'Animals@editPet');

Route::get('/owners/{owner}/edit', 'Owners@edit');
Route::post('/owners/{owner}/edit', 'Owners@editOwner');


Route::get('/search', 'Animals@search');