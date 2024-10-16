<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view ('home', ["title" => "Home"]);
});
Route::get('/home', function () {
    return view ('home', ["title" => "Home"]);
});
Route::get('/katalog', function () {
    return view ('katalog', ["title" => "Katalog"]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/edit', [EditController::class, 'index'])->middleware('auth');
Route::get('/adduser', [EditController::class, 'adduser'])->middleware('auth');
Route::post('/insertuser', [EditController::class, 'insertuser'])->middleware('auth');

Route::get('/showdata/{id}', [EditController::class, 'showdata'])->middleware('auth');
Route::post('/updatedata/{id}', [EditController::class, 'updatedata'])->middleware('auth');

Route::get('/deleteuser/{id}', [EditController::class, 'deleteuser'])->middleware('auth');



Route::get('/katalog', [KatalogController::class, 'index'])->middleware('auth');
Route::get('/addkatalog', [KatalogController::class, 'addkatalog'])->middleware('auth');
Route::post('/insertkatalog', [KatalogController::class, 'insertkatalog'])->middleware('auth');

Route::get('/showkatalog/{id}', [KatalogController::class, 'showkatalog'])->middleware('auth');
Route::post('/updatekatalog/{id}', [KatalogController::class, 'updatekatalog'])->middleware('auth');

Route::get('/deletekatalog/{id}', [KatalogController::class, 'deletekatalog'])->middleware('auth');

