<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DistributorController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/tes', function () {
//     return view('tes');
// });
// Route::get('/hal2', function () {
//     return view('halaman2');
// });

Route::resource('dashboard', DashboardController::class);
Route::resource('distributor', DistributorController::class);