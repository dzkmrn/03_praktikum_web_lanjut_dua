<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profil1(){
        return view('dzaka');
    }

    public function profil2(){
        return view('izamul');
    }
}
