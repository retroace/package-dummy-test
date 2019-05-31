<?php


Route::get('/', function () {
    return view('admin::index');
});

Route::get('/dashboard', 'DashboardController@index');

