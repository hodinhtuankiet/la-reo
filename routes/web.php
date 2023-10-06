<?php

use App\Http\Controllers\Admin\User\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/admin/users/login', [LoginController::class, 'index']);
