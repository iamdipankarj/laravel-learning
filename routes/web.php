<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
  return view('home');
});

Route::get('/jobs', function () {
  $jobs = Job::with('employer')->latest()->simplePaginate(10);
  return view('jobs.index', [
    'jobs' => $jobs
  ]);
});

Route::post('/jobs', function () {
  request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => 'required'
  ]);
  Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1,
  ]);
  return redirect('/jobs');
});

Route::get('/jobs/create', function () {
  return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
  $job = Job::find($id);
  return view('jobs.show', [
    'job' => $job
  ]);
});

Route::patch('/jobs/{id}', function ($id) {
  request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => 'required'
  ]);

  $job = Job::findOrFail($id);
  $job->update([
    'title' => request('title'),
    'salary' => request('salary')
  ]);

  return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{id}', function ($id) {
  Job::findOrFail($id)->delete();

  return redirect('/jobs');
});

Route::get('/jobs/{id}/edit', function ($id) {
  return view('jobs.edit', [
    'job' => Job::find($id)
  ]);
});

Route::get('/contact', function () {
  return view('contact');
});
