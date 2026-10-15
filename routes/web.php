<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ideas');
});

Route::post('/ideas', function () {
    dd(request()->all());
});
