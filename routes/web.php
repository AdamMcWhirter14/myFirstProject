<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', ['greeting' => 'Hello, welcome to the site!']);
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    if (! $job) {
        abort(404, 'Job not found');
    }

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});