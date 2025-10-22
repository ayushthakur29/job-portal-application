<?php

use App\Http\Controllers\Accountcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[homecontroller::class,'index'])->name('home');
route::get('/account/register',[Accountcontroller::class,'registration'])->name('account.registration');
route::post('/account/process-register',[Accountcontroller::class,'processregistration'])->name('account.processregistration');
route::get('/account/login',[Accountcontroller::class,'login'])->name('account.login');
