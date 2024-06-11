<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\GroupVpnController;

Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('companies', CompanyController::class)->names('admin.companies');
Route::resource('group_vpns', GroupVpnController::class)->names('admin.group_vpns');
