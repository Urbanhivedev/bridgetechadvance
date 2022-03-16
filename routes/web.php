<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;

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
    return view('auth.login');
});

Route::get('/redirect', [HomeController::class, 'index']);


Route::get('/add_developer', [AdminController::class, 'developer']);
Route::post('/add_developer', [AdminController::class, 'developers']);
Route::get('/instruct', [AdminController::class, 'instructors']);

Route::get('/free_tutorials', [AdminController::class, 'tutorial']);



Route::get('/book_class', [AdminController::class, 'bookaclass']);
Route::get('/studentt', [AdminController::class, 'students']);
Route::post('/booking_class', [AdminController::class, 'bookclass']);



Route::get('/available', [AdminController::class, 'availabletime']);


// Route::get('/book_class', [UserController::class, 'bookaclass']);
Route::get('/user_student', [UserController::class, 'index']);
Route::get('/student_class', [UserController::class, 'class']);
Route::post('/bookstudent_class', [UserController::class, 'bookclass']);







Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
