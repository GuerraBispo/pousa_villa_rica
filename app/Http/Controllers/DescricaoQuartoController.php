<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DescricaoQuartoController extends Controller
{
    public function quarto(){
        return view('quartos.descricaoquarto');
    }
}
