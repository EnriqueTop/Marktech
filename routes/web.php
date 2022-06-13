<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\acercaMailable;
use App\Http\Controllers\Cart\CartController;
use App\Http\Controllers\Cart\LaterController;


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
    return view('layouts/layout');
});

Route::get('/post', function () {
    return view('post');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/opinion', function () {
    $correo = new acercaMailable;

    Mail::to('herrera.alvaradoartu@gmail.com')->send($correo);

    return "Correo enviado";
    return view('opinion');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/contactar', 'App\Http\Controllers\EmailController@contact')->name('contact');
