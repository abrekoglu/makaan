<?php

use App\Models\Property;
use App\Models\Testimonial;
use App\Models\PropertyType;
use App\Models\PropertyAgent;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\PropertyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Show index page
Route::get('/', [PropertyController::class, 'index']);

// Show create property page
Route::get('/properties/create', [PropertyController::class, 'create'])->middleware('auth');

// Store property
Route::post('/properties/store', [PropertyController::class, 'store'])->middleware('auth');

// Show all property listing page
Route::get('/properties/property-list', [PropertyController::class, 'showList']);

// Show property edit page
Route::get('/properties/{property}/edit', [PropertyController::class, 'edit'])->middleware('auth');

// Update property
Route::put('/properties/{property}', [PropertyController::class, 'update'])->middleware('auth');

// Delete property
Route::delete('/properties/{property}', [PropertyController::class, 'destroy'])->middleware('auth');

// Show single property page
Route::get('/properties/{property}', [PropertyController::class, 'show']);

// Show register page
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// Store user data
Route::post('/users', [UserController::class, 'store'])->middleware('guest');

// Logout user
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login page
Route::get('/login', [UserController::class, 'login'])->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->middleware('guest');
