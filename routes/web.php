<?php

use App\Http\Controllers\JobController;
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

Route::view('/contact', 'contact');
