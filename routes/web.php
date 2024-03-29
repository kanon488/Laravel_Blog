<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class)->name('home');
Route::resource('cursos', CursoController::class);
Route::view('nosotros','nosotros')->name('nosotros');
Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');
Route::post('contactanos',[ContactanosController::class, 'store'])->name('contactanos.store');

// Route::controller(CursoController::class)->group(function () {
//     Route::get('cursos','index')->name('cursos.index');

//     Route::get('cursos/create', 'create')->name('cursos.create');

//     Route::post('cursos','store')->name('cursos.store');

//     Route::get('cursos/{id}/edit','edit')->name('cursos.edit');

//     Route::put('cursos/{curso}', 'update')->name('cursos.update');

//     Route::delete('/cursos/{curso}', 'destroy')->name('cursos.destroy');

//     Route::get('/cursos/{id}', 'show')->name('cursos.show');
// });


