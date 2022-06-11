<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EldersController;

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
Route::get('/nav', function () {
    return view('layouts.nav');
});
Route::get('/master', function () {
    return view('layouts.master');
});
Route::get('/ho', function () {
    return view('layouts.landingpage');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/addItem', function () {
    return view('addpic');
});
// Route::get('/addItem',  [EldersController::class, 'addpic']);


Route::get('/Contactus', function () {
    return view('layouts.Contactus');
});

Route::get('/About', function () {
    return view('layouts.Aboutus');
});


Route::post('/added',  [EldersController::class, 'insert']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
