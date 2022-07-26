<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\USerController;
use App\Http\Controllers\ListingController;
use GuzzleHttp\Middleware;

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

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - store new listing
// edit - show form to edit listing
// update - Update listing
// destroy - delete listing

// All Listings
Route::get('/', [ListingController::class, 'index']);

// Show create  form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


// Store Listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');


// Show edit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');


// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show register/create form
Route::get('/register', [USerController::class, 'create'])->middleware('guest');


// create NEw User

Route::post('/users', [USerController::class, 'store']);

// Log User Out
Route::post('/logout', [USerController::class, 'logout'])->middleware('auth');


// Show Login form
Route::get('/login', [USerController::class, 'login'])->name('login')->middleware('guest');


// Log in USer
Route::post('/users/authenticate', [USerController::class, 'authenticate']);
