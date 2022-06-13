<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EldersController;
use App\Http\Controllers\TestController;
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
Route::get('/signup', function () {
    return view('sign');
});
Route::get('/ho', function () {
    return view('layouts.landingpage');
});


Route::get('/addItem', function () {
    return view('addpic');
});
Route::get('/log', function () {
    return view('login');
});
Route::post('/sign',[TestController::class, 'insert_user']);
// Route::post('form', [TestController::Class, 'form_validate'])-> middleware('CheckUser')  ;
Route::post('/form',[TestController::class, 'form_validate']);


Route::get('/Contactus', function () {
    return view('layouts.Contactus');
});

Route::get('/About', function () {
    return view('layouts.Aboutus');
});
Route::post('user/id/{id}',  [TestController::class, 'user']);
Route::get('request',  [TestController::class, 'request']);


Route::post('/added',  [EldersController::class, 'insert']);


Route::post('/request',[TestController::class, 'insert_request']);

Route::get('/show_request',[TestController::class, 'show_request']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
