<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\PustakawanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

// Register dan Login
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout']);

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
Route::get('/katalogbuku', function () {
    return view('blog-grids',[
        'title' => 'My Blog'
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

// Dashboard view

Route::get('/dashboard',function(){
    return view('dashboard.index' , [
        'judul' => 'Dashboard'
    ]);
});
Route::get('/dashboard/forms',function(){
    return view('dashboard.forms', [
        'judul' => 'Form'
    ]);
});
Route::get('/dashboard/profile',function(){
    return view('dashboard.profile', [
        'judul' => 'Profil'
    ]);
});
Route::get('/dashboard/tables',function(){
    return view('dashboard.tables', [
        'judul' => 'Tabel'
    ]);
});
Route::get('/dashboard/login',function(){
    return view('dashboard.login', [
        'judul' => 'Login'
    ]);
});

// Model Buku View

Route::resource('/dashboard/buku', BukuController::class);

// Model Pustakawan view

Route::delete('/dashboard/pustakawan/{user:id}', [PustakawanController::class, 'destroy']);

Route::resource('/dashboard/pustakawan', PustakawanController::class);

// Model Peminjam View

Route::delete('/dashboard/peminjam/{user:id}', [PeminjamController::class, 'destroy']);
Route::resource('/dashboard/peminjam', PeminjamController::class);


