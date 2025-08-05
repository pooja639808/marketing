<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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
    return view('index-2');
})->name('index-2');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/index-2', function () {
    return view('index-2');
})->name('index.2');

Route::get('/index-3', function () {
    return view('index-3');
})->name('index.3');

Route::get('/index-one-page', function () {
    return view('index-one-page');
})->name('index.one');

Route::get('/index-two-page', function () {
    return view('index-two-page');
})->name('index.two');

Route::get('/index-three-page', function () {
    return view('index-three-page');
})->name('index.three');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/news-details', function () {
    return view('news-details');
})->name('news.details');

Route::get('/news-grid', function () {
    return view('news-grid');
})->name('news.grid');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/project-details', function () {
    return view('project-details');
})->name('project.details');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/service-details', function () {
    return view('service-details');
})->name('service.details');

Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/team-details', function () {
    return view('team-details');
})->name('team.details');

Route::get('/team', function () {
    return view('team');
})->name('team');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


