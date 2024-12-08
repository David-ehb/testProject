<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'David';
    return view('about', compact('name'));
})->name('about');

Route::get('/home', function (){
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('contact/{postcode?}', function ($postcode = '1745'){
    return view('contact', compact('postcode'));
})->name('contactPostcode');

Route::get('/index', function (){
    return view('index');
})->name('index');