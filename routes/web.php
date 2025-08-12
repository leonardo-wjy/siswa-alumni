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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\StudentController;

Route::resource('students', StudentController::class);

// tambahan untuk export excel & pdf
Route::get('students-export-excel', [StudentController::class,'exportExcel'])->name('students.export.excel');
Route::get('students/{student}/export-pdf', [StudentController::class,'exportPdf'])->name('students.export.pdf');
