<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetContoller;
use App\Http\Controllers\Home;
use App\Http\Controllers\vid;
use App\Http\Controllers\navbar;
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


Route::get('/', [Home::class,'index']);
Route::get('/sponsor',[navbar::class,'index'] );
Route::get('/videos-and-photos', [vid::class, 'index']);

Route::get('/Dates', function () {
    return view('Dates');
});


Route::get('/programe', function () {
    return view('programe');
});
Route::get('/Guidelines', function () {
    return view('Guidelines');
});
Route::get('/call', function () {
    return view('call');
});

Route::get('/registration', function () {
    return view('registration');
});


Route::get('/social', function () {
    return view('social');
});

Route::get('/keynotes', function () {
    return view('keynotes');
});

Route::get('/topic', function () {
    return view('topic');
});
Route::get('/technical', function () {
    return view('technical');
});
Route::get('/commit', function () {
    return view('commit');
});


Route::get('/heraklion', function () {
    return view('heraklion');
});
Route::get('/conference', function () {
    return view('conference');
});
Route::get('/venu', function () {
    return view('venu');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/future-settlement', function () {
    return view('future-settlement ');
});

Route::get('/geoai-for-monitoring', function () {
    return view('geoai-for-monitoring');
});


Route::get('/deep-learning', function () {
    return view('deep-learning');
});


Route::get('/urban-remote', function () {
    return view('urban-remote');
});
Route::get('/earth-observation', function () {
    return view('earth-observation');
});
