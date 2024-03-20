<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertiesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/properties/create', [PropertiesController::class, 'create'])->name('properties.create');

Route::post('/properties', [PropertiesController::class, 'store'])->name('properties.store');

Route::get('/properties', [PropertiesController::class, 'index'])->name('properties.index');

Route::get('/properties/{property_id}', [PropertiesController::class, 'show'])->name('properties.show');

// Create additional Routes below
