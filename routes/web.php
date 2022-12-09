<?php

use App\Models\Buku;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DashboardIndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PustakawanController;

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

// Route::get('/example', function(){
//     return view('example');
// });

// Route::get('/welcome',function(){
//     return view('welcome');
// });


Route::get('/', function () {
    return view('index', [
        'title' => 'Beranda',
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'title' => 'About Us'
    ]);
});

// Route::get('/team', function () {
//     return view('team',[
//         'title' => 'Team'
//     ]);
// });

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
Route::post('/login', [UserController::class, 'authenticate'])->name('login');
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
// Route::get('/katalogbuku', function () {
//     return view('blog-grids',[
//         'title' => 'My Blog'
//     ]);
// });
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
// Route::get('/not-found', function () {
//     return view('404',[
//         'title' => 'Not Found'
//     ]);
// });

// Dashboard view

Route::get('/dashboard',[DashboardIndexController::class, 'index'])->middleware('auth');

Route::get('/dashboard/forms',function(){
    return view('dashboard.forms', [
        'judul' => 'Form'
    ]);
});
Route::get('/dashboard/profile',[UserController::class, 'editdatadiri']);
Route::post('/dashboard/profile/update',[UserController::class, 'updatedata']);
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


// Katalog Buku

Route::get('/katalog', [BukuController::class, 'katalog']);
Route::post('/booking', [PeminjamanController::class, 'booking']);

// Model Buku View

Route::get('/dashboard/buku/laporan', [BukuController::class, 'laporan']);
Route::resource('/dashboard/buku', BukuController::class)->middleware(['pustakawan']);

// Model Pustakawan view

Route::delete('/dashboard/pustakawan/{user:id}', [PustakawanController::class, 'destroy'])->middleware('kepala');

Route::resource('/dashboard/pustakawan', PustakawanController::class)->middleware('kepala');

// Model Peminjam View
 
Route::get('/dashboard/peminjam/laporan', [PeminjamController::class, 'laporan']);
Route::delete('/dashboard/peminjam/{user:id}', [PeminjamController::class, 'destroy'])->middleware('pustakawan');
Route::resource('/dashboard/peminjam', PeminjamController::class)->middleware('pustakawan');

//Model Peminjaman Buku View


Route::get('/dashboard/peminjaman/laporan', [PeminjamanController::class, 'laporan']);
Route::get('/dashboard/peminjaman', [PeminjamanController::class, 'index'])->middleware(['pustakawan']);
Route::get('/dashboard/peminjaman/{peminjaman:id}/update', [PeminjamanController::class, 'update'])->middleware(['pustakawan']);
Route::delete('/dashboard/peminjaman/{peminjaman:id}/delete', [PeminjamanController::class, 'destroy'])->middleware(['pustakawan']);
Route::get('/dashboard/peminjaman/{peminjaman:id}/perpanjangan', [PeminjamanController::class, 'perpanjangan'])->middleware(['pustakawan']);
Route::get('/dashboard/peminjaman/{peminjaman:id}/pengembalian', [PeminjamanController::class, 'pengembalian'])->middleware(['pustakawan']);
Route::get('/dashboard/histori', [PeminjamanController::class, 'histori'])->middleware('auth');


