<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdressesController;
use App\Http\Controllers\InvoicesController;

Route::get('/users',[UserController::class, 'index']);

// buscar usuario por id
Route::get('/users/{id}',[UserController::class,'findOne']);

Route::get('/addresses',[AdressesController::class,'index']);


//insert usuario
Route::post('/users',[UserController::class,'insert']);

// buscar por um endereço pelo id
Route::get('/addresses/{id}',[AdressesController::class,'findOne']);

//insert endereço
Route::post('/addresses',[AdressesController::class, 'insert']);

//rotas invoice


Route::get('/invoices',[InvoicesController::class, 'index']);
Route::post('/invoices',[InvoicesController::class,'createInvoices']);
Route::get('/invoices/{id}',[InvoicesController::class, 'findOne']);
