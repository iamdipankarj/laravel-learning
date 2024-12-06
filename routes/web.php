<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});

Route::view('/', 'home');

//Route::controller(JobController::class)->group(function () {
//  Route::get('/jobs', 'index');
//
//  // Create
//  Route::get('/jobs/create', 'create');g
//
//  // Show
//  Route::get('/jobs/{job}', 'show');
//
//  // Store
//  Route::post('/jobs', 'store');
//
//  // Edit
//  Route::get('/jobs/{job}/edit', 'edit');
//
//  // Update
//  Route::patch('/jobs/{job}', 'update');
//
//  // Delete
//  Route::delete('/jobs/{job}', 'destroy');
//});

Route::resource('jobs', JobController::class);

// Auth
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::view('/contact', 'contact');
Route::view('/livewire', 'livewire');
