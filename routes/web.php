<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;

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
    return view('welcome');
});

Route::get('/new-login', function () {
    return view('newLogin');
});

Route::get('/new-register', function () {
    return view('newRegister');
});
Route::get('/new-forget', function () {
    return view('newForget');
});


Route::get('/', function () {
    return view('welcome');
});

//Vacancies Routes


Route::get('/vacancies',[VacancyController::class, 'index']);


Route::get('/home', function () {
    return view('home');
});

Route::get('/admin-dashboard', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/applicant.dashboard', [App\Http\Controllers\ApplicantController::class, 'index'])->name('applicant');
Route::get('/admin.dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/board.dashboard', [App\Http\Controllers\BoardController::class, 'index'])->name('board');