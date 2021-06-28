<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/', function () {
    return view('website.index');
});

Route::get('/about', function () {
    return view('website.about');
});

Route::get('/category', function () {
    return view('website.category');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/single', function () {
    return view('website.single');
});


// Admin routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', function() {
        return view('admin.dashboard.index');
    })->name('dashboard.admin');

    Route::resource('category', 'CategoryController');
});

