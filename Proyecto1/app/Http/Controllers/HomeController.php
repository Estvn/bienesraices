<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function inicio($nombre, $apellido = null){
        /*
        if(!$apellido){
            return 'El primer nombre de la persona es: ' .$nombre;
        }else{
            return 'El nombre y apellido de la persona es: ' .$nombre.' '.$apellido;
        }
        */
        //return view('clases', compact('nombre', 'apellido'));
        return view('clases', ['nom' => $nombre, 'ape' => $apellido]);
    }

    public function show(){
        return view('welcome');
    }
}
