<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SpecialtiesController;
use App\Http\Controllers\Admin\VisitsController;
use App\Http\Controllers\Doctor\AppointmentsController;
use App\Http\Controllers\Doctor\DoctorsController;
use App\Http\Controllers\Doctor\PatientsController;

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

Route::get('/d', function () {
    return view('layouts/main');
});

Route::get('dash', function () {
    return view('/dashboardFront/index');
});

Route::get('website', function () {
    return view('index');
});

/* ------------------------------------------------- Admin Routes -------------------------------------------------*/
Route::get('/AdminCreate', [ AdminController::class , 'create'])->name('AdminCreate')->middleware('auth');
Route::get('/AdminRead', [ AdminController::class , 'index'])->name('AdminRead')->middleware('auth');
Route::post('/AdminCreate', [ AdminController::class , 'store'])->name('AdminStore');
Route::get('/AdminEdit/{user_id}', [ AdminController::class ,'edit']);
Route::put('/AdminEdit/{user_id}', [ AdminController::class , 'update']);
/*----------------------------------------------------End Admin Routes-----------------------------------------------*/








/* ------------------------------------------------- Specialties Routes -------------------------------------------------*/
Route::get('/SpecCreate', [ SpecialtiesController::class , 'create'])->name('SpecCreate')->middleware('auth');
Route::get('/SpecRead', [ SpecialtiesController::class , 'index'])->name('SpecRead')->middleware('auth');
Route::post('/SpecCreate', [SpecialtiesController::class , 'store'])->name('SpecStore');
Route::delete('/SpecDelete/{id}', [ SpecialtiesController::class ,'destroy']);
//Route::put('/AdminEdit/{user_id}', [ AdminController::class , 'update']);
/*----------------------------------------------------End Specialties Routes---------------------------------------------*/









/* ------------------------------------------------- Doctors Routes -------------------------------------------------*/
Route::get('/DoctorCreate', [DoctorsController::class , 'create'])->name('DoctorCreate')->middleware('auth');
Route::get('/DoctorRead', [DoctorsController::class , 'index'])->name('Doctoread')->middleware('auth');
Route::post('/DoctorCreate', [DoctorsController::class , 'store'])->name('DoctorStore');
Route::delete('/DoctorDelete/{id}', [ DoctorsController::class ,'destroy']);
Route::get('/DoctorEdit/{id}', [ DoctorsController::class ,'edit']);
Route::put('/DoctorEdit/{id}', [ DoctorsController::class , 'update']);
/*----------------------------------------------------End Doctors Routes---------------------------------------------*/






/* ------------------------------------------------- Patients Routes -------------------------------------------------*/
Route::get('/PatientsCreate', [ PatientsController::class , 'create'])->name('PatientsCreate')->middleware('auth');
Route::get('/PatientsRead', [ PatientsController::class , 'index'])->name('PatientsRead')->middleware('auth');
Route::post('/PatientsCreate', [ PatientsController::class , 'store'])->name('PatientsStore');
//Route::get('/AdminEdit/{user_id}', [ PatientsController::class ,'edit']);
//Route::put('/AdminEdit/{user_id}', [ PatientsController::class , 'update']);
/*----------------------------------------------------End Patients Routes---------------------------------------------*/






/* ------------------------------------------------- Appoinments Routes -------------------------------------------------*/
Route::get('/AppCreate', [ AppointmentsController::class , 'create'])->name('AppCreate')->middleware('auth');
Route::get('/AppRead', [ AppointmentsController::class , 'index'])->name('AppRead')->middleware('auth');
Route::post('/AppCreate', [AppointmentsController::class , 'store'])->name('AppStore');
Route::delete('/AppDelete/{id}', [ AppointmentsController::class ,'destroy']);
Route::get('/AppEdit/{user_id}', [ AppointmentsController::class ,'edit']);
Route::put('/AppEdit/{user_id}', [ AppointmentsController::class , 'update']);
/*----------------------------------------------------End Appoinments Routes---------------------------------------------*/





/* ------------------------------------------------- Visits Routes -------------------------------------------------*/
Route::get('/VisitCreate', [ VisitsController::class , 'create'])->name('VisitCreate')->middleware('auth');
//Route::get('/AdminRead', [ AdminController::class , 'index'])->name('AdminRead')->middleware('auth');
Route::post('/VisitCreate', [VisitsController::class , 'store'])->name('VisitStore');
Route::delete('/SpecDelete/{id}', [ SpecialtiesController::class ,'destroy']);
//Route::get('/AdminEdit/{user_id}', [ AdminController::class ,'edit']);
//Route::put('/AdminEdit/{user_id}', [ AdminController::class , 'update']);
/*----------------------------------------------------End Visits Routes---------------------------------------------*/





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
