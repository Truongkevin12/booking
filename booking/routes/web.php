<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
|--------------------------------------------------------------------------
| Web admin
|--------------------------------------------------------------------------
*/
Route::get('/home1', function () {
    return view('admin/layout');
});
Route::get('admin/category/add', function () {
    return view('admin/category/index');
});
Route::get('admin/category/show', function () {
    return view('admin/category/show');
});
Route::get('/home', function () {
    return view('client/index');
});
Route::get('/login', function () {
    return view('auth/login');
});
Route::resource('categories', CategoryController::class);
