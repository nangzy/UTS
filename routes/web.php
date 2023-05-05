<?php

use App\Http\Controllers\CoffeeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// Route::get('/1', function () {
//     return view('home',[
//         'id' => 1,
//         'user' => User::all()
//     ]);
// });

// Route::get('/2', function () {
//     return view('home',[
//         'id' => 2,
//         'user' => User::all()
//     ]);
// });

Route::get('/{users:id}',[Controller::class, 'index']);
Route::get('/coffee/{users:id}',[CoffeeController::class, 'index']);
Route::post('/coffee/buy',[CoffeeController::class, 'buy'])->name('coffee.buy');
Route::get('/coffee/buy/confirmation/{user}', [CoffeeController::class, 'check'])->name('confirmation.index');
Route::get('/transaction/{users:id}',[TransactionController::class, 'index']);