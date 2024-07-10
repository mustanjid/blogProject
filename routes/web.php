<?php

use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Front\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [FrontendController::class, 'index'])->name('home');
// Route::get('/about-us', [FrontendController::class, 'aboutUs']);
// Route::get('/blog', [FrontendController::class, 'blogHome']);
// Route::get(('/contact-us'), [FrontendController::class, 'contactUs']);

/*
If a group of routes all utilize the same controller, you may use the controller method to define the common controller for all of the routes within the group. Then, when defining the routes, you only need to provide the controller method that they invoke:*/

Route::controller(FrontendController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about-us', 'aboutUs');
    Route::get('/blog', 'blogHome');
    Route::get(('/contact-us'),  'contactUs');
});



Route::prefix('user')->group(function () {
    Route::middleware(['web'])->group(function () {
        Route::get('signup', [ProfileController::class, 'signUp']);
        Route::get('login', [ProfileController::class, 'login']);
        Route::post('new-register', [ProfileController::class, 'newRegister']);
        Route::post('/processTologin', [ProfileController::class, 'processToLogin']);
    });
});


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
