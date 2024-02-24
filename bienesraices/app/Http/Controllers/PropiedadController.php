<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propiedad;

class PropiedadController extends Controller
{
    public function home(){
        $propiedades = Propiedad::all();
        return view('home', compact('propiedades'));
        //return view('home', ['datosPropiedades'->$propiedades]);
    }

    public function create(){
        return view('crear');
    }

    public function store(Request $request){
        $nvaPropiedad = new Propiedad();
        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr = $request->input('costoxmtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoDuenio');
        $nvaPropiedad->direccion = $request->input('direccion');
        $nvaPropiedad->pisos = $request->input('pisos');
        $nvaPropiedad->save();
        return redirect('/home');
    }

    public function editar($id){
        $propiedad = Propiedad::find($id);
        return view('editar', compact('propiedad'));
    }

    public function actualizar(Request $request, $id){
        $nvaPropiedad = Propiedad::find($id);
        $nvaPropiedad->color = $request->input('color');
        $nvaPropiedad->metros = $request->input('metros');
        $nvaPropiedad->tipoPropiedad = $request->input('tipoPropiedad');
        $nvaPropiedad->costoxmtr = $request->input('costoxmtr');
        $nvaPropiedad->codigoDuenio = $request->input('codigoDuenio');
        $nvaPropiedad->direccion = $request->input('direccion');
        $nvaPropiedad->pisos = $request->input('pisos');
        $nvaPropiedad->save();
        return redirect('/home');
    }

    public function eliminar($id){
        //$propiedad = Propiedad::where('color', $id);
        $propiedad = Propiedad::find($id);
        return view('eliminar', compact('propiedad'));
    }

    public function destroy($id){
        $propiedad = Propiedad::find($id);
        $propiedad->delete();
        return redirect('/home');
    }









}


