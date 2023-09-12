<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/students', 
    [studentController::class, 'index'])->name ('student.index');
    Route::get('/students/add',[studentController::class, 'create'])->name('students.create');
    Route::post('/students/store', [studentController::class, 'store'])->name('students.store');
    Route::get('/students/delete/{id}',[studentController::class, 'delete'])->name('students.delete');
    Route::get('/students/edit/{id}',[studentController::class, 'edit'])->name('students.edit');
});
