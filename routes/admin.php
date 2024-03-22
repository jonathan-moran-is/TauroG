<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ClientUserController;
use App\Http\Controllers\Admin\ExternalUserController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\InvitationController;

Route::get('', [HomeController::class, 'index']);
Route::resource('users', UserController::class)->names('admin.users');
Route::resource('clients', ClientController::class)->names('admin.clients');
Route::resource('companies', CompanyController::class)->names('admin.companies');
Route::resource('clientUsers', ClientUserController::class)->names('admin.clientUsers');
Route::resource('externalUsers', ExternalUserController::class)->names('admin.externalUsers');
Route::resource('payments', PaymentController::class)->names('admin.payments');
Route::resource('suscriptions', SuscriptionController::class)->names('admin.suscriptions');
Route::resource('invitations', SuscriptionController::class)->names('admin.invitations');
