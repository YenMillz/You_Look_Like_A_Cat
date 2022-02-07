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
    $grupe=['W-1841', 'W-1842','P-1841','P-1842','P-1843R','R-1841'];
    $specialitatea="Administrarea aplicatiilor web";
    $suma = 0;
    
    return view('welcome', ['grupe' => $grupe, 'suma' => $suma, 'specialitatea'=>$specialitatea]);}
);

Route::get('/dashboard', function () {
    return redirect('/home/dashboard');
});

Route::get('/home/dashboard', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/products', function () {
    return view('products');
});