<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicio extends Controller
{
    // camelCase
    function inicio(){
        return view ('inicio');
    }    
}
