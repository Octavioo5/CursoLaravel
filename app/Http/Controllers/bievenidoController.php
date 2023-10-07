<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class bievenidoController extends Controller
{
    public function bienvenido(){
        $nombre="Octavio";
        $alumnos=['Ximena','Perez','Sergio','Evelyn','Dani','Juan','David','Kyan','Eitan','Adrian','Leo'];
        $datos=array(['nombre'=>'ximena','edad'=>16,'turno'=>'Matutino'],
                     ['nombre'=>'Perez','edad'=>17,'turno'=>'vespertino'],
                     ['nombre'=>'Octavio','edad'=>24,'turno'=>'vespertino'],
                     ['nombre'=>'Evelyn','edad'=>17,'turno'=>'Matutino'],
                     ['nombre'=>'Dani','edad'=>17,'turno'=>'vespertino'],
                     ['nombre'=>'Juan','edad'=>17,'turno'=>'vespertino']);

        return view('bienvenido', compact('nombre','alumnos','datos'));

    }
}
