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
    return view('welcome');
});


// misalnih
route::get('/login', function() {
	return view('login');
});
route::get('/reg', function() {
	return view('register');
});

route::get('/home', function() {
	return view('home');
});

route::get('/coba', function() {
	return view('coba');
});