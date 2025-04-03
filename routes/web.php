<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeHomeController;

Route::get('/', [OfficeHomeController::class, 'index']);
