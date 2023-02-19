<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CafeManhaController extends Controller
{
    public function cafe(){
        return view('cafemanha.index');
    }
}
