<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;

class AreaController extends Controller
{
    public function create(){
        return view('area.create');
    }
    public function salida(Request $request){
        Area::create($request->all());
    }
}
