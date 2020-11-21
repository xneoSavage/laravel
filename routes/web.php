<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('/pages/home');
})->name('home');

Route::get('/pages/about', function () {
    return view('/pages/about');
})->name('about');

Route::get('/pages/contact', function() {
    return view('/pages/contact');
})->name('contact');

Route::get('/pages/login',function () {
    return view('/pages/login');
})->name('login');


Route::post('/contact/submit', [ContactController::class,
    'submit'])->name('contact-form');

Route::get('/contact/all', [ContactController::class,
    'alldata'])->name('contact-data');

Route::get('/contact/all/{id}',
[ContactController::class,'showOneMessage'])->name('contact-data-one');

Route::get('/contact/all/{id}/update',
    [ContactController::class,'updateMessage'])->name('contact-data-update');

Route::post('/contact/all/{id}/update',
    [ContactController::class,'updateMessageSubmit'])->name('contact-data-update-submit');

Route::get('/contact/all/{id}/delete',
    [ContactController::class,'deleteMessage'])->name('contact-delete');

Route::get('/instagram/', function () {
    return view('/pages/instagram');
})->name('instagram');

