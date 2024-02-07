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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(StudentController::class)->group(function(){
    Route::get('/students','index');
    route::get('/students/create','create');
    Route::post('/students','store');
    Route::get('/students/{student}/edit','edit');
    Route::put('/students/{student}','update');
    Route::delete('/students/{student}','destroy');
    
});