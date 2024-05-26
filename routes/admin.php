<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CompanyController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('companies', CompanyController::class)->names('admin.companies');
