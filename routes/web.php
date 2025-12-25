<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// routes/web.php
Route::get('/', [HomeController::class, 'index']);

