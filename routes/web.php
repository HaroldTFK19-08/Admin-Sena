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
Route::get('consulta2',[CourseController::class,'consulta2']);
Route::get('consulta1',[ApprenticeController::class,'consulta1']);
Route::get('consulta3',[TeacherController::class,'consulta3']);
Route::get('consulta4',[TrainingCenterController::class,'consulta4']);
Route::get('consulta5',[AreaController::class,'consulta5']);
Route::get('consulta6',[ComputerController::class,'consulta6']);
Route::get('consulta7',[CourseController::class,'consulta7']);
Route::get('consulta8',[ApprenticeController::class,'consulta8']);
Route::get('consulta9',[TeacherController::class,'consulta9']);
Route::get('consulta10',[CourseController::class,'consulta10']);
Route::get('consulta11',[ApprenticeController::class,'consulta11']);
Route::get('consulta12',[TeacherController::class,'consulta12']);
Route::get('consulta13',[CourseController::class,'consulta13']);
Route::get('consulta14',[CourseController::class,'consulta14']);
Route::get('consulta15',[TeacherController::class,'consulta15']);
Route::get('consulta16',[ApprenticeController::class,'consulta16']);
Route::get('consulta17',[ComputerController::class,'consulta17']);
Route::get('consulta18',[ComputerController::class,'consulta18']);
Route::get('consulta19',[TrainingCenterController::class,'consulta19']);
Route::get('consulta20',[ApprenticeController::class,'consulta20']);
Route::get('consulta21', [ComputerController::class, 'consulta21']);
Route::get('consulta22', [CourseController::class, 'consulta22']);
Route::get('consulta23', [ApprenticeController::class, 'consulta23']);
Route::get('consulta24', [TeacherController::class, 'consulta24']);
Route::get('consulta25', [CourseController::class, 'consulta25']);
Route::get('consulta26', [ApprenticeController::class, 'consulta26']);
Route::get('consulta28', [ComputerController::class, 'consulta28']);
Route::get('consulta29', [AreaController::class, 'consulta29']);
Route::get('consulta30', [TrainingCenterController::class, 'consulta30']);
Route::get('consulta31', [ApprenticeController::class, 'consulta31']);
Route::get('consulta32', [ApprenticeController::class, 'consulta32']);
Route::get('consulta33', [CourseController::class, 'consulta33']);
Route::get('consulta34', [TeacherController::class, 'consulta34']);
Route::get('consulta35', [ComputerController::class, 'consulta35']);
Route::get('consulta36', [ApprenticeController::class, 'consulta36']);
Route::get('consulta37', [ApprenticeController::class, 'consulta37']);
Route::get('consulta38', [CourseController::class, 'consulta38']);
Route::get('consulta39', [CourseController::class, 'consulta39']);
Route::get('consulta40', [TeacherController::class, 'consulta40']);
Route::get('consulta41', [TeacherController::class, 'consulta41']);
Route::get('consulta42', [ApprenticeController::class, 'consulta42']);
Route::get('consulta43', [CourseController::class, 'consulta43']);
Route::get('consulta44', [TeacherController::class, 'consulta44']);
//Route::get('consulta45', [CourseController::class, 'consulta45']);
Route::get('consulta46', [TeacherController::class, 'consulta46']);
Route::get('consulta47', [CourseController::class, 'consulta47']);
Route::get('consulta48', [TeacherController::class, 'consulta48']);
Route::get('consulta49', [CourseController::class, 'consulta49']);
Route::get('consulta50', [TeacherController::class, 'consulta50']);
Route::get('consulta51', [CourseController::class, 'consulta51']);
Route::get('consulta52', [CourseController::class, 'consulta52']);
Route::get('consulta53', [TeacherController::class, 'consulta53']);
Route::get('consulta54', [AreaController::class, 'consulta54']);
//Route::get('consulta55', [TrainingCenterController::class, 'consulta55']);
Route::get('consulta56', [CourseController::class, 'consulta56']);
Route::get('consulta57', [TeacherController::class, 'consulta57']);
Route::get('consulta58', [AreaController::class, 'consulta58']);
//Route::get('consulta59', [TrainingCenterController::class, 'consulta59']);
Route::get('consulta60', [ComputerController::class, 'consulta60']);
Route::get('consulta61', [CourseController::class, 'consulta61']);
Route::get('consulta62', [AreaController::class, 'consulta62']);
Route::get('consulta63', [AreaController::class, 'consulta63']);
//Route::get('consulta64', [TrainingCenterController::class, 'consulta64']);
Route::get('consulta65', [ApprenticeController::class, 'consulta65']);
Route::get('consulta66', [TeacherController::class, 'consulta66']);
Route::get('consulta67', [AreaController::class, 'consulta67']);
Route::get('consulta68', [TrainingCenterController::class, 'consulta68']);
Route::get('consulta69', [CourseController::class, 'consulta69']);
Route::get('consulta70', [TeacherController::class, 'consulta70']);
Route::get('areas/create',[AreaController::class,'create'])->name('area.create');
Route::post('areas/salida',[AreaController::class,'salida'])->name('area.store');
Route::get('trainingcenter/registro',[TrainingCenterController::class,'operador'])->name('trainingcenter.registro');
Route::post('trainingcenter/salidas',[TrainingCenterController::class,'recurso'])->name('trainingcenter.salidas');
Route::get('computer/computador',[ComputerController::class,'operacion'])->name('computer.computador');
Route::post('computer/completado',[ComputerController::class,'salir'])->name('computer.completado');