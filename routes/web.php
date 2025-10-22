<?php

use App\Http\Controllers\Accountcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/',[homecontroller::class,'index'])->name('home');

route::group(['account'],function(){
    //guest route
route::group(['middleware'=>'guest'], function(){
route::get('/account/register',[Accountcontroller::class,'registration'])->name('account.registration');
route::post('/account/process-register',[Accountcontroller::class,'processregistration'])->name('account.processregistration');
route::get('/account/login',[Accountcontroller::class,'login'])->name('account.login');
route::post('/account/authenticate',[Accountcontroller::class,'authenticate'])->name('account.authenticate');
});

    //authenticated route
    route::group(['middleware'=>'auth'], function(){
route::get('/account/profile',[Accountcontroller::class,'profile'])->name('account.profile');
route::get('/account/logout',[Accountcontroller::class,'logout'])->name('account.logout');

});

});


