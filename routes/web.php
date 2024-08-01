<?php

use App\Livewire\Auth\LoginPg;
use App\Livewire\Auth\SignupPg;
use App\Livewire\Home\IndexPg;
use App\Livewire\Regpg;
use App\Livewire\SinPg;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;


// ====== Guest Route ====== //
Route::get('/' , function(){return redirect('/login');});
Route::get('login' , LoginPg::class);
Route::get('signup' , SignupPg::class);

// ====== Auth Route ====== //
Route::group(['middleware' => 'IsUser'], function () {
    Route::get('dashboard', IndexPg::class);
});