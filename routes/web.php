<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SpecialtiesController;

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

/*Route::get('/d', function () {
    return view('layouts/dashlayout');
});

Route::get('dash', function () {
    return view('/dashboardFront/index');
});*/

Route::get('website', function () {
    return view('index');
});

/* ------------------------------------------------- Admin Routes -------------------------------------------------*/
Route::get('/AdminCreate', [ AdminController::class , 'create'])->name('AdminCreate')->middleware('auth');
Route::get('/AdminRead', [ AdminController::class , 'index'])->name('AdminRead')->middleware('auth');
Route::post('/AdminCreate', [ AdminController::class , 'store'])->name('AdminStore');


Route::get('/AdminEdit/{user_id}', [ AdminController::class ,'edit']);
Route::put('/AdminEdit/{user_id}', [ AdminController::class , 'update']);


/*----------------------------------------------------End Admin Routes---------------------------------------------*/



/* ------------------------------------------------- Specialties Routes -------------------------------------------------*/
Route::get('/SpecCreate', [ SpecialtiesController::class , 'create'])->name('SpecCreate')->middleware('auth');
//Route::get('/AdminRead', [ AdminController::class , 'index'])->name('AdminRead')->middleware('auth');
Route::post('/SpecCreate', [SpecialtiesController::class , 'store'])->name('SpecStore');


//Route::get('/AdminEdit/{user_id}', [ AdminController::class ,'edit']);
//Route::put('/AdminEdit/{user_id}', [ AdminController::class , 'update']);


/*----------------------------------------------------End Specialties Routes---------------------------------------------*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
