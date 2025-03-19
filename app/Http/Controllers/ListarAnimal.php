<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarAnimal extends Controller
{
    // camelCase
    function listarAnimal(){
        return view ('listar-animal');
    }    
}
