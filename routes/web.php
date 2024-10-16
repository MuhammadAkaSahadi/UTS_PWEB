<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('/admin/pages/login');
// });

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/pages/login', [AdminController::class, 'login']);
Route::get('/admin/pages/register', [AdminController::class, 'register']);
Route::get('/admin/pages/contact', [AdminController::class, 'contact']);
Route::get('/admin/pages/sign_up', [AdminController::class, 'sign_up']);