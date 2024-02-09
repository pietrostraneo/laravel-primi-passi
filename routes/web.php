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
    $data = [

        'hello'  => 'Hello World!'

    ];
    return view('home', $data);
});

Route::get('/get-started', function () {
    $data = [

        'title'  => 'Get started with laravel!'

    ];
    return view('start', $data);
})->name('download');

Route::get('/whats-new', function () {

    $data = [

        'title'  => 'What is new in laravel?'

    ];
    return view('update', $data);
})->name('whatsnew');
