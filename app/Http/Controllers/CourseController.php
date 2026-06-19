<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Area;
use App\Models\Training_center;

class CourseController extends Controller
{
    public function registro(){
        $areas=Area::all();
        $training_centers=Training_center::all();
        return view('course.registros',compact('areas','training_centers'));
    } 
    public function dato(Request $request){
        Course::create($request->all());
    }
}
