<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenticeController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\TeacherController;

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
Route::get('areas/create',[AreaController::class,'create'])->name('area.create');
Route::post('areas/store',[AreaController::class,'salida'])->name('area.store');

Route::get('trainingcenter/registrar',[TrainingCenterController::class,'registro'])->name('trainingcenter.registro');
Route::post('/trainingcenter/salidas', [TrainingCenterController::class, 'dato'])->name('trainingcenter.salidas');

Route::get('computer/computador',[ComputerController::class,'marca'])->name('computer.computador');
Route::post('computer/model',[ComputerController::class,'model'])->name('computer.completado');

Route::get('teacher/registro',[TeacherController::class,'registro'])->name('teacher.registro');
Route::post('teacher/admin',[TeacherController::class,'dato'])->name('teacher.admin');

Route::get('course/registro',[CourseController::class,'registro'])->name('course.registros');
Route::post('course/admin',[CourseController::class,'dato'])->name('course.peticion');

Route::get('apprentice/registro',[ApprenticeController::class,'registro'])->name('aprendiz.registro');
Route::post('apprentice/admin',[ApprenticeController::class,'dato'])->name('aprendiz.admin');