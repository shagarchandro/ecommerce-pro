<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;


route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('redirect',[HomeController::class,'redirect']);
route::get('/view_catagory',[AdminController::class,'view_catagory']);

route::get('/add_catagory',[AdminController::class,'add_catagory']);
