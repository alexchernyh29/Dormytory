<?php

use Illuminate\Support\Facades\Route;

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
    return view('banner');
});

Route::get('/b', function () {
    return view('banner');
});

Route::get('/tower', function () {
    return view('tower');
});

Route::get('/roomlist', function () {
    return view('roomlist');
});

Route::get('/sectionleft', function () {
    return view('sectionleft/sectionleft');
});

Route::get('/sectionleft-1', function () {
    return view('sectionleft/sectionleft-1');
});

Route::get('/sectionleft-2', function () {
    return view('sectionleft/sectionleft-2');
});

Route::get('/sectionleft-3', function () {
    return view('sectionleft/sectionleft-3');
});

Route::get('/sectionleft-4', function () {
    return view('sectionleft/sectionleft-4');
});

Route::get('/sectionleft-5', function () {
    return view('sectionleft/sectionleft-5');
});

Route::get('/sectionleft-6', function () {
    return view('sectionleft/sectionleft-6');
});

Route::get('/sectionleft-7', function () {
    return view('sectionleft/sectionleft-7');
});

Route::get('/sectionright', function () {
    return view('sectionright/sectionright');
});

Route::get('/sectionright-1', function () {
    return view('sectionright/sectionright-1');
});

Route::get('/sectionright-2', function () {
    return view('sectionright/sectionright-2');
});

Route::get('/sectionright-3', function () {
    return view('sectionright/sectionright-3');
});

Route::get('/sectionright-4', function () {
    return view('sectionright/sectionright-4');
});

Route::get('/sectionright-5', function () {
    return view('sectionright/sectionright-5');
});

Route::get('/sectionright-6', function () {
    return view('sectionright/sectionright-6');
});

Route::get('/sectionright-7', function () {
    return view('sectionright/sectionright-7');
});

Route::get('/students', [\App\Http\Controllers\StudentsController::class, 'index'])->name('students.index');
Route::get('students/create', [\App\Http\Controllers\StudentsController::class, 'create'])->name('students.create');
Route::post('students/store', [\App\Http\Controllers\StudentsController::class, 'store'])->name('students.store');
Route::get('students/edit/{id}', [\App\Http\Controllers\StudentsController::class, 'edit'])->name('students.edit');
Route::get('students/destroy/{id}', [\App\Http\Controllers\StudentsController::class, 'destroy'])->name('students.destroy');
Route::post('students/update', [\App\Http\Controllers\StudentsController::class, 'update'])->name('students.update');
Route::get('students/show/{param}', [\App\Http\Controllers\StudentsController::class, 'show'])->name('students.show');

Route::get('/room', [\App\Http\Controllers\RoomsController::class, 'index'])->name('room.index');
Route::get('room/create', [\App\Http\Controllers\RoomsController::class, 'create'])->name('room.create');
Route::post('room/store', [\App\Http\Controllers\RoomsController::class, 'store'])->name('room.store');
Route::get('room/edit/{id}', [\App\Http\Controllers\RoomsController::class, 'edit'])->name('room.edit');
Route::get('room/destroy/{id}', [\App\Http\Controllers\RoomsController::class, 'destroy'])->name('room.destroy');
Route::post('room/update', [\App\Http\Controllers\RoomsController::class, 'update'])->name('room.update');
Route::get('room/show/{param}', [\App\Http\Controllers\RoomsController::class, 'show'])->name('room.show');
