<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidationController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function() {
//     return ('hello form webserver articen');
// });

Route::redirect('/home', '/');

Route::get('/product/{productName}', function ($productName) {
    return view('product', ['Name' => $productName]);
});

Route::get('/payment', function () {
    return 'this is the paymment page';
});

Route::get('/cart', function () {
    return 'this is cart page';
});

Route::get('/products/{name}', [ProductController::class, 'getProduct']);

Route::view('/signup', 'signup');

Route::view('/userform', 'user-form');

Route::post('/adduser', [FormController::class, 'addUser'])->name('adduser');

Route::view('/formvalid', 'form-validation');

Route::post('/formdata', [FormValidationController::class, 'formData'])->name('formdata');