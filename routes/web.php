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

Route::get('/', function () {
    return view('index');
});


Route::get('/contact', function () {
    return view('contact');
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/projects', function () {
    return view('projects');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/service-details', function () {
    return view('services-details');
});



Route::get('/plans', function () {
    return view('plans');
});


Route::get('/plans-details', function () {
    return view('plans-details');
});