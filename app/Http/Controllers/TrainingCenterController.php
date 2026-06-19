<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training_center;

class TrainingCenterController extends Controller
{
    public function registro(){
        return view('trainingcenter.registro');
    }
    
    public function dato(Request $request){
        Training_center::create($request->all());
    }
}
