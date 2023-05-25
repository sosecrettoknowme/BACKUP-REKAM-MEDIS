<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardDokterController;
use App\Http\Controllers\DashboardPasienController;
use App\Http\Controllers\DashboardRuangController;
use App\Http\Controllers\DashboardObatController;
use App\Http\Controllers\DashboardRekamController;


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
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});



// LOGIN
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


// REGISTER
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);


// DASHBOARD
Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth'); //hanya bole diakses oleh orang yang suda login

// DASHBOARD DOKTER
Route::resource('/dashboard/dokter', DashboardDokterController::class)->middleware('admin');
Route::get('/cetakpdfdokter', [DashboardDokterController::class, 'cetakPdf']);


// DASHBOARD PASIEN
Route::resource('/dashboard/pasien', DashboardPasienController::class)->middleware('admin');
Route::get('/cetakpdfpasien', [DashboardPasienController::class, 'cetakPdf']);


// DASHBOARD RUANG
Route::resource('/dashboard/ruang', DashboardRuangController::class)->middleware('admin');
Route::get('/cetakpdfruang', [DashboardRuangController::class, 'cetakPdf']);

// DASHBOARD OBAT
Route::resource('/dashboard/obat', DashboardObatController::class)->middleware('admin');
Route::get('/cetakpdfobat', [DashboardObatController::class, 'cetakPdf']);

// DASHBOARD REKAM MEDIS
Route::resource('/dashboard/rekam', DashboardRekamController::class)->middleware('auth');
Route::get('/cetakpdfrekam', [DashboardRekamController::class, 'cetakPdf']);
Route::get('/rekam/search', [DashboardRekamController::class, 'search']);

