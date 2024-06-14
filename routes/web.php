<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'index']);
