<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});

Route::get('/jobs', function () {
  return view('jobs', [
    'jobs' => [
      [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$50,000'
      ],
      [
        'id' => 2,
        'title' => 'PHP Developer',
        'salary' => '$10,000'
      ],
      [
        'id' => 3,
        'title' => 'Teacher',
        'salary' => '$30,000'
      ],
      [
        'id' => 4,
        'title' => 'Designer',
        'salary' => '$20,000'
      ]
    ]
  ]);
});

Route::get('/contact', function () {
  return view('contact');
});