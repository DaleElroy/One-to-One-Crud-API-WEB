<?php

use App\Http\Controllers\StudentController;
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


Route::controller(StudentController::class)->group(function(){
    Route::get('/students','index');
    route::get('/students/create','create');
    Route::post('/students','store');
    Route::get('/students/{student}/edit','edit');
    Route::put('/students/{student}','update');
    Route::delete('/students/{student}','destroy');

    Route::delete('/students/{country}','destroyCountry')->name('students.destroyCountry');
    Route::delete('/students/{academic}/destoryAcademic','destroyAcademic')->name('students.destroyAcademic');
    
});

Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::delete('students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::delete('students/{student}/destroyAcademic', [StudentController::class, 'destroyAcademic'])->name('students.destroyAcademic');
Route::delete('students/{student}/destroyCountry', [StudentController::class, 'destroyCountry'])->name('students.destroyCountry');
