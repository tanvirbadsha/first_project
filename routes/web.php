<?php

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
        'jobs' => [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "salary" => 10000
            ],
            [
                "id" => 2,
                "title" => "Web Developer",
                "salary" => 20000
            ],
            [
                "id" => 3,
                "title" => "Mobile Developer",
                "salary" => 30000
            ]
        ]
    ]);
});
Route::get('/jobs/{id}', function($id){
        $jobs = [
            [
                "id" => 1,
                "title" => "Software Engineer",
                "salary" => 10000
            ],
            [
                "id" => 2,
                "title" => "Web Developer",
                "salary" => 20000
            ],
            [
                "id" => 3,
                "title" => "Mobile Developer",
                "salary" => 30000
            ]
        ];
    $findJob = Arr::first($jobs, fn($job) => $job['id'] == $id); 
    return view('job', [
        'job' => $findJob
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});