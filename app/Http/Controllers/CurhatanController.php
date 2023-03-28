<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\curhatan;

class CurhatanController extends Controller
{
    public function curhatan1(){
        $datacurhatan = curhatan::where('nama','Muhammad Dzaka Murran Rusid')->get();
        return view('curhatan1',compact('datacurhatan'));
    }
    public function curhatan2(){
        $datacurhatan = curhatan::where('nama','Mohammad Izamul Fikri Fahmi')->get();
        return view('curhatan1',compact('datacurhatan'));
    }
}
