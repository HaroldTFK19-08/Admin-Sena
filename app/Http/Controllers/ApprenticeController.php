<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apprentice;
use App\Models\Course;
use App\Models\Computer;

class ApprenticeController extends Controller
{
    public function registro(){
        $courses = Course::all(); 
        $computers = Computer::all();
        return view('aprendiz.registro', compact('courses', 'computers'));
    }
    
    public function dato(Request $request){
        Apprentice::create($request->all());
    }
}
