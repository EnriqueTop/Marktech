<?php

use App\Http\Controllers\BotManController;
use App\Mail\acercaMailable;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('/', 'App\Http\Controllers\ProductController@index')->name('home.index');
Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('home.about');
Route::get('/products', 'App\Http\Controllers\ProductController@index')->name('product.index');
Route::get('/card', 'App\Http\Controllers\cardController@index')->name('product.card');
Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name('product.show');

Route::get('/TuCarrito', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/TuCarrito/delete', 'App\Http\Controllers\CartController@delete')->name("cart.delete");
Route::post('/TuCarrito/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");

Route::middleware('auth')->group(function () {
    Route::get('/TuCarrito/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");
    Route::get('/my-account/orders', 'App\Http\Controllers\MyAccountController@orders')->name("myaccount.orders");
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name('admin.home.index');
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name('admin.product.index');
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
});

Auth::routes();

Route::get('/Sugerencias', function () {
    return view('footer.form');
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

Route::match(['get', 'post'], '/botman', [BotManController::class, 'handle']);

Route::get('/chatbot', function () {
    return view('chatbot.chat');
});

Route::get('/terminosycondiciones', function () {
    return view('footer.tyc');
});

Route::get('/quienessomos', function () {
    return view('footer.qn');
});

Route::get('/avisodeprivacidad', function () {
    return view('footer.av');
});

Route::get('/IniciarSesion', function () {
    return view('auth.login');
});

Route::get('/Registro', function () {
    return view('auth.register');
});
