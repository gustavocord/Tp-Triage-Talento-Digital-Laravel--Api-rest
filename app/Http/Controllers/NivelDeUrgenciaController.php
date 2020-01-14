<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NivelDeUrgencia;

class NivelDeUrgenciaController extends Controller
{
    //
    public function listar(){

        return (NivelDeUrgencia::all());
    }
   
   
     public function obtenerUno ($id)
    {
        return NivelDeUrgencia::find($id);
    }

    public function agregar(Request $request){

    	 $obj = new NivelDeUrgencia;
    	 $obj->color =$request->color;
    	 $obj->tipo_de_urgencia=$request->tipo_de_urgencia;
    	 $obj->tiempo_de_espera_maximo=$request->tiempo_de_espera_maximo;
    	 $obj->save();
    	 return $obj;

    } 


     public function actualizar(Request $request, $id)//actualiza
    {
        $urgenciaAModificar = NivelDeUrgencia::find($id);
        $urgenciaAModificar->tipo_de_urgencia = $request->tipo_de_urgencia;
         $urgenciaAModificar->color = $request->color;
          $urgenciaAModificar->tiempo_de_espera_maximo = $request->tiempo_de_espera_maximo;
        $urgenciaAModificar->save();
        
    return $urgenciaAModificar;
}   

public function borrar($id)
    {
        $urgenciaABorrar = NivelDeUrgencia::find($id);
        $urgenciaABorrar->delete();
    }

}
