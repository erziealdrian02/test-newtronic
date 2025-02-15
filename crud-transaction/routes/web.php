<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {  
    Route::get('/dashboard', [DashboardController::class, 'index'])  
        ->name('dashboard');  
    Route::get('/crawl-data', [DashboardController::class, 'crawlData']);
    Route::post('/process-json', [DashboardController::class, 'store']);


    Route::get('/transaction', [TransactionController::class, 'transaction'])  
        ->name('transaction');  
    Route::post('/transaction/submit', [TransactionController::class, 'store'])  
        ->name('transaction.store');  
    Route::post('/transaction/product/submit', [TransactionController::class, 'storeProduct'])  
        ->name('transaction.storeProduct');  
    Route::delete('/transaction/{id_transaksi}/delete-product/{id_produk}', [TransactionController::class, 'deleteProduct'])  
        ->name('transaction.deleteProduct');  
    Route::delete('/transaction/delete/{id}', [TransactionController::class, 'deleteTransaction'])  
        ->name('transaction.deleteTransaction');  

    Route::get('/product', [ProductController::class, 'index'])  
        ->name('product.index');  
    Route::post('/product/submit', [ProductController::class, 'store'])  
        ->name('product.store');  
    Route::put('/product/update/{id}', [ProductController::class, 'update'])  
        ->name('product.update');  
    Route::delete('/product/delete/{id}', [ProductController::class, 'delete'])  
        ->name('product.delete');  
});  


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
