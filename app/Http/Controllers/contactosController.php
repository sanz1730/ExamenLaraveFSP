<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactosModel;
use App\Models\contactosAlcaldiaModel;


class contactosController extends Controller
{
    //
    public function inicio(){
      $Datos = contactosModel::where('activo',1)->get();;
      $Alcaldias = contactosAlcaldiaModel::all(); 
        return view('index',compact('Datos','Alcaldias'));
    }


    public function formulario(){
       //#- Para traer las alcaldias 
        $Alcaldias = contactosAlcaldiaModel::all();
       //#- Para ver los Valores
        // dd($Alcaldias);
        return view('form',compact('Alcaldias'));
    }


    public function edit($id_contactos){     
          $Alcaldias = contactosAlcaldiaModel::all();
          $Contactos = contactosModel::where('id_contactos',$id_contactos)->firstOrFail();
        return view('edit',compact('Alcaldias','Contactos'));
    }


    public function captura(){
          $Alcaldias = contactosAlcaldiaModel::all();
        return view('captura',compact('Alcaldias'));
    }


    public function store (Request $request){
        $campos=[
            'nombre'=>'required|string',
            'apellido_paterno'=>'required|string',
            'apellido_materno'=>'required|string',
            'fecha_nacimiento'=>'required|string',
            'calle'=>'required|string',
            'numero'=>'required|string',
            'nombre_asentamiento'=>'required|string',
            'codigo_postal'=>'required|numeric',
            'numero_casa'=>'required|numeric',
            'numero_celular'=>'required|numeric',
        ];
        $mensaje=[
            'required'=>'Campo Requerido  ( :attribute )',
            'number'=>'Solo numeros  ( :attribute )',
        ];
        $this->validate($request,$campos,$mensaje);

            $datosContacto = request()->except('_token','Guardar','Cancelar');
            contactosModel::insert($datosContacto);
        return redirect('/');
    }
    
    public function editar (Request $request, $id_contactos){
        $campos=[
            'nombre'=>'required|string',
            'apellido_paterno'=>'required|string',
            'apellido_materno'=>'required|string',
            'fecha_nacimiento'=>'required|string',
            'calle'=>'required|string',
            'numero'=>'required|string',
            'nombre_asentamiento'=>'required|string',
            'codigo_postal'=>'required|numeric',
            'numero_casa'=>'required|numeric',
            'numero_celular'=>'required|numeric',
        ];
        $mensaje=[
            'required'=>'Campo Requerido  ( :attribute )',
            'number'=>'Solo numeros  ( :attribute )',
        ];
        $this->validate($request,$campos,$mensaje);

        
            $datosContacto = request()->except('_token','Guardar','Cancelar');
            contactosModel::where('id_contactos','=',$id_contactos)->update($datosContacto);
        return redirect('/');
    }

    public function eliminar (Request $request, $eliminar){
            contactosModel::where('id_contactos','=',$eliminar)->delete();
        return redirect('/');
    }
    
    public function desactivar ($id_contactos){
        contactosModel::where('id_contactos','=',$id_contactos)->update(['activo'=>2]);
    return redirect('/');
}

    

}
