<?php

use Illuminate\Support\Facades\Route;


Route::get('/hello', function () {

    return view('hello');
});




Route::get('/hello/{name}', function ($name) {

    // return view('hello');
    $result = 'name ' . $name;

    return $result;
});

Route::get('/hello/{name}/{surname}', );
