<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\emp_controller;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/employe',[emp_controller::class,'index'])->name('employe.index');

Route::get('/employe/create',[emp_controller::class,'create'])->name('employe.create');
Route::post('/employe',[emp_controller::class,'store'])->name('employe.store');
Route::get('delete/{id}',[emp_controller::class,'delete']);
Route::get('edit/{id}',[emp_controller::class,'edit']);
Route::post('employe/update/{id}',[emp_controller::class,'update'])->name('employe.update');



Route::get('/login' ,[admin::class,'login']);