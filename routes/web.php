<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // loads resources/views/welcome.blade.php
});

Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/group', function () {
    $members = [
        [
            'name' => 'Vladimir Ortega',
            'role' => 'Leader: Handles project management and leads the team.',
            'facebook' => 'https://www.facebook.com/ur.vladyy',
            'about' => 'https://vladss00.github.io/bio/',
            'image' => 'images/vlad.jpg'
        ],
        [
        'name' => 'Ivy Mae A. Ringor ',
            'role' => 'Member: Handles project management and leads the team.',
            'facebook' => 'https://www.facebook.com/ivymaeringor',
            'about' => ' https://ivymaeringor.github.io/bio/',
            'image' => 'images/ivy.jpg'
  ]

    ];

    return view('group', compact('members'));
});
