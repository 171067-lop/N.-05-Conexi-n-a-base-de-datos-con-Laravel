<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HolaController extends Controller
{
    //
    public function index(){
        $hola = "Hola Mundo!! Jose Luis Flores Ignacio --- 171059";
        return view("welcome", compact("hola"));
    }
}
