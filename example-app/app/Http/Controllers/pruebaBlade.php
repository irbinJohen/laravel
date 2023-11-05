<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class pruebaBlade extends Controller
{

    

    public function user() {
        return view('saludo', ['nombre' => 'Irbin']);
    }



}

