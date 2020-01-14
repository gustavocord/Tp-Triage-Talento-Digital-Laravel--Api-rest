<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    //
     public function listar(){

        return Persona::where('fecha_egreso',null)->with('NivelDeUrgencia')->get();
    }

  

     public function obteneruno ($id)
    
    {
        return Persona::where('fecha_egreso',null)->with('NivelDeUrgencia')->find($id);
    }


 public function agregar(Request $request) //ingresa una nueva
 { 
        $obj = new Persona(); // nombre igual que el model
        $obj->nombre = $request->nombre;
        $obj->apellido = $request->apellido;
        $obj->edad = $request->edad;
        $obj->descripcion_estado= $request->descripcion_estado;
        $obj->fecha_ingreso =date ('Y-m-d');
        

        $obj->nivel_de_urgencia_id=$request->nivel_de_urgencia_id;
        $obj->save();
        return $obj;
    }

     public function actualizar(Request $request, $id)//actualiza
    {
        $PersonaAModificar = Persona::find($id);
        $PersonaAModificar->nombre = $request->nombre;
        $PersonaAModificar->apellido = $request->apellido;
        $PersonaAModificar->edad = $request->edad;
        $PersonaAModificar->descripcion_estado= $request->descripcion_estado;
         $PersonaAModificar->fecha_egreso=$request->fecha_egreso;
        $PersonaAModificar->save();
    return $PersonaAModificar;
}   

public function borrar($id)
    {
        $urgenciaABorrar = Persona::find($id);
        $urgenciaABorrar->delete();
    }
}
