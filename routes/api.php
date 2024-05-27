<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class)
    ->only(['index', 'show']);

Route::resource('invoices', InvoiceController::class)
    ->only(['index', 'show']);
