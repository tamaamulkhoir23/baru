<?php

use App\Http\Controllers\suhucontroller;
use Illuminate\Auth\Events\Login;
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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dataperiodik', function () {
    return view('dataperiodik'); // Gantilah dengan nama view yang sesuai.
});

Route::get('/databuah', function () {
    return view('databuah'); // Gantilah dengan nama view yang sesuai.
});

// Route::get('/datasuhu', function () {
//     return view('datasuhu'); // Gantilah dengan nama view yang sesuai.
// });

Route::get('/datagas', function () {
    return view('datagas'); // Gantilah dengan nama view yang sesuai.
});

Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/exm', function () {
    return view('pages.example');
});

Route::get('/api/suhu', [suhucontroller::class, 'getSuhuData']);

Route::get('/datasuhu', [suhucontroller::class, 'index'])->name('suhu.index');
Route::get('/dashboard', [suhucontroller::class, 'idx'])->name('jumlahsuhu');