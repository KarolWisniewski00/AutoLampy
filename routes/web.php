<?php

use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\IndexController;
use App\Http\Controllers\Client\ServiceController;
use App\Http\Controllers\Client\ShipmentController;
use App\Http\Controllers\Client\ShopController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//CLIENT
Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/o-nas', [AboutController::class, 'index'])->name('about');
Route::get('/usługi', [ServiceController::class, 'index'])->name('service');
Route::get('/sklep', [ShopController::class, 'index'])->name('shop');
Route::get('/wysyłka', [ShipmentController::class, 'index'])->name('shipment');
Route::get('/kontakt', [ContactController::class, 'index'])->name('contact');

//DASHBOARD
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
