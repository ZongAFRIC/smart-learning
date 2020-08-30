<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/about', function () {
    return view('layouts.about');
});


Route::get('/live', function () {
    return view('layouts.live');
});

Route::get('/become-teacher', function () {
    return view('layouts.become-teacher');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});

Route::get('/course-details', function () {
    return view('layouts.course-details');
});

Route::get('/courses', function () {
    return view('layouts.courses');
});

Route::get('/faq', function () {
    return view('layouts.faq');
});

Route::get('/gallery', function () {
    return view('layouts.gallery');
});

Route::get('/news', function () {
    return view('layouts.nesws');
});

Route::get('/teachers', function () {
    return view('layouts.teachers');
});

Route::get('/team-details', function () {
    return view('layouts.team-details');
});

Route::get('/about', function () {
    return view('layouts.about');
});

Route::get('/pricing', function () {
    return view('layouts.pricing');
});
