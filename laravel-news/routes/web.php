<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/home', function () {
    return view('index', $user = ['nama'=>'Amin Kurniyati']);
});



// Route::get('latihan', function () {
//     return view('latihan');
// });

// Route::get('program', function () {
//     return $name = ['php', 'java', 'c', 'javascript', 'dart'];
// });

// Route::get('table', function () {
//     $program = ['PHP', 'JAVA', 'JavaScript'];
//     return view('table', compact('program'));
// });


// Route::get('/', function () {
//     return view('templates');
// });

