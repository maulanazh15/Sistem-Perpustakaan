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

Route::get('/example', function(){
    return view('example');
});

Route::get('/welcome',function(){
    return view('welcome');
});

Route::get('/', function () {
    return view('index', [
        'title' => 'Home',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About Us'
    ]);
});

Route::get('/team', function () {
    return view('team',[
        'title' => 'Team'
    ]);
});

Route::get('/login', function () {
    return view('login.index',[
        'title' => 'Login'
    ]);
});
Route::get('/register', function () {
    return view('register.index',[
        'title' => 'Register'
    ]);
});

Route::get('/pricing', function () {
    return view('pricing',[
        'title' => 'Pricing'
    ]);
});
Route::get('/contact', function () {
    return view('contact',[
        'title' => 'Contact'
    ]);
});
Route::get('/blog-grids', function () {
    return view('blog-grids',[
        'title' => 'My Blog'
    ]);
});
Route::get('/blog-details', function () {
    return view('blog-details',[
        'title' => 'Details Blog'
    ]);
});
Route::get('/not-found', function () {
    return view('404',[
        'title' => 'Not Found'
    ]);
});
