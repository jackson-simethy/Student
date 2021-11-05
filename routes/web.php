<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\MarkController;
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

Route::get('/',[StudentController::class,'index'])->name('index');

Route::get('/add-student',[StudentController::class,'addStudent'])->name('student.add');

Route::post('/save-student',[StudentController::class,'saveStudent'])->name('student.save');

Route::get('/students',[StudentController::class,'allStudents'])->name('student.index');

Route::get('/students/{id}',[StudentController::class,'editStudent'])->name('student.edit');

Route::put('/update-student/{id}',[StudentController::class,'updateStudent'])->name('student.update');

Route::delete('/delete-student/{id}',[StudentController::class,'deleteStudent'])->name('student.delete');

Route::get('/add-marks',[MarkController::class,'addMarks'])->name('marks.add');

Route::post('/save-marks',[MarkController::class,'saveMarks'])->name('marks.save');

Route::get('/marks',[MarkController::class,'index'])->name('marks.index');

Route::get('/marks/{id}',[MarkController::class,'editMarks'])->name('marks.edit');

Route::put('/update-marks/{id}',[MarkController::class,'updateStudent'])->name('marks.update');

Route::delete('/delete-marks/{id}',[MarkController::class,'deleteMark'])->name('marks.delete');


      