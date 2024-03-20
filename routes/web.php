<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlanController;

Route::get('/', [HomeController::class, 'index'])->name('home'); //Rota para o home, História do vaso

Route::get('/socios/create', [ClientController::class, 'create'])->name('socios'); //cadastro de sócios torcedores 
Route::post('/socios/createAction', [ClientController::class, 'createAction'])->name('socios.createAction'); //

Route::get('/socios/{client}/edit', [ClientController::class, 'edit'])->name('socios.edit');
Route::put('/socios/{client}', [ClientController::class, 'update'])->name('socios.update');

Route::get('/socios/find', [ClientController::class, 'find'])->name('socios.find');
Route::post('/socios/find', [ClientController::class, 'findAction'])->name('socios.find');

Route::get('/socios/findById', [ClientController::class, 'findById'])->name('socios.findbyid');
Route::post('/socios/findById', [ClientController::class, 'findByIdAction'])->name('socios.findbyid');

Route::get('/socios/{client}', [ClientController::class, 'delete'])->name('socios.delete');

Route::get('/socios', [ClientController::class, 'index'])->name('socios');

Route::get('/product/create', [ProductController::class, 'create'])->name('product.create'); //cadastro de produtos  
Route::post('/product/createAction', [ProductController::class, 'createAction'])->name('product.createAction'); //

Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}', [ProductController::class, 'update'])->name('product.update');

Route::get('/product/find', [ProductController::class, 'find'])->name('product.find');
Route::post('/product/find', [ProductController::class, 'findAction'])->name('product.find');

Route::get('/product/findById', [ProductController::class, 'findById'])->name('product.findbyid');
Route::post('/product/findById', [ProductController::class, 'findByIdAction'])->name('product.findbyid');

Route::get('/product/{product}', [ProductController::class, 'delete'])->name('product.delete');

Route::get('/product', [ProductController::class, 'index'])->name('products');

Route::get('/planos', [PlanController::class, 'index'])->name('planos');

