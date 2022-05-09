<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $invoices = DB::table('invoices')->get();
    return view('invoices.index', [
        'invoices'=> $invoices
    ]);
});

Route::get('/create', function () {
    return view ('invoices.create');
});

Route::get('/invoices', [InvoiceController::class, 'index']);