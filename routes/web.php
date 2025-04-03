<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfficeHomeController;
use App\Http\Controllers\FormPageController;

Route::get('/', [OfficeHomeController::class, 'index']);
Route::get('/forms/{slug}', [FormPageController::class, 'show'])->name('forms.show');