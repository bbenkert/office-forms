<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeHomeController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/office', [OfficeHomeController::class, 'index']);

