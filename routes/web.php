<?php

Route::resource('contact','Contact\\ContactController');

Route::get('/about', function () {
    return view('about');
});