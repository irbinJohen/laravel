<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function saludar ($name) {
        
        return "¡Hola, $name!";
    }
    
    public function sumar($num1,$num2) {
        return  $num1+$num2 ;
    }
    
}


