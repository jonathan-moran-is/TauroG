<?php

use Illuminate\Support\Facades\Route;

use App\Mail\InvitacionReg;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/invitacion', function () {
    
    $correo = new InvitacionReg;
    Mail::to('JMoran@taurogas.com')->send($correo);

    return "Correo enviado!!";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

