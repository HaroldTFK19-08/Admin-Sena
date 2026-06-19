<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
    public function marca(){
        return view('computer.computador');
    }
    public function model(Request $request){
        Computer::create($request->all());
    }
}
