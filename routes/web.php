<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('home');
});
Route::get('/about', function(){
    return view('about');
});
Route::get('/jobs', function(){
    /*
    {
        jobs: {
            {}
        }
    }
    */
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});
Route::get('/jobs/{id}', function($id) {
    $findJob = Job::find($id);
    return view('job', [
        'job' => $findJob
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});