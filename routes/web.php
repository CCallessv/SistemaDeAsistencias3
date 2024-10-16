<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiembroController;

Route::get('/', function () { return view('index');})->middleware('auth');

Auth::routes(['register' => false]);

Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
################################################################################################################

//Route::get('/miembros', function () { return view('miembros.index');})->middleware('auth');
Route::get('/miembros', [App\Http\Controllers\MiembroController::class, 'index'])->middleware('auth');
###############################################################################################################

Route::get('/create', function () { return view('miembros.create');})->middleware('auth');
