<?php

use App\Http\Controllers\buahcontroller;
use App\Http\Controllers\gascontroller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\periodikcontroller;
use App\Http\Controllers\suhucontroller;
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
    return redirect()->route('login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('masuk');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::middleware(['auth.login'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dataperiodik', function () {
        return view('dataperiodik');
    });

Route::get('/buah/{id}/research-on', [buahcontroller::class, 'researchOn'])->name('buah.researchOn');
Route::get('/buah/{id}/research-off', [buahcontroller::class, 'researchOff'])->name('buah.researchOff');    

Route::get('/chart-data/{buahId}', [suhucontroller::class, 'chartData']);
Route::get('/chart-data2', [suhucontroller::class, 'chartData2']); // Perbaikan pada method


Route::get('/dataperiodik', [periodikcontroller::class, 'index'])->name('dataperiodik');
Route::get('/api/suhu', [suhucontroller::class, 'getSuhuData']);
Route::post('/simpandata', [ApiController::class, 'storeData']);

Route::get('/dashboard', [suhucontroller::class, 'idx'])->name('jumlahsuhu');


Route::get('/databuah', [buahcontroller::class, 'index'])->name('databuah');
Route::get('/buahcreate', [buahcontroller::class, 'create'])->name('buah.create');
Route::post('/buahstore', [buahcontroller::class, 'store'])->name('buah.store');
Route::get('/editbuah/{id}', [buahcontroller::class, 'edit'])->name('buah.edit');
Route::put('/databuah/{id}', [buahcontroller::class, 'update'])->name('buah.update');
Route::delete('/databuah/{id}', [buahcontroller::class, 'destroy'])->name('buah.destroy');

Route::get('/datagas', [gascontroller::class, 'index'])->name('datagas');
Route::get('/gascreate', [gascontroller::class, 'create'])->name('gas.create');
Route::post('/gasstore', [gascontroller::class, 'store'])->name('gas.store');
Route::get('/editgas/{id}', [gascontroller::class, 'edit'])->name('gas.edit');
Route::put('/datagas/{id}', [gascontroller::class, 'update'])->name('gas.update');
Route::delete('/datagas/{id}', [gascontroller::class, 'destroy'])->name('gas.destroy');

Route::get('/datasuhu', [suhucontroller::class, 'index'])->name('datasuhu');
Route::get('/suhucreate', [suhucontroller::class, 'create'])->name('suhu.create');
Route::post('/suhustore', [suhucontroller::class, 'store'])->name('suhu.store');
Route::get('/editsuhu/{id}', [suhucontroller::class, 'edit'])->name('suhu.edit');
Route::put('/datasuhu/{id}', [suhucontroller::class, 'update'])->name('suhu.update');
Route::delete('/datasuhu/{id}', [suhucontroller::class, 'destroy'])->name('suhu.destroy');
});