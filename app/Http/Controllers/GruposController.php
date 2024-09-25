<?php
//Cracion de funciones,pueden usar la db
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Grupos;

class GruposController extends Controller
{
    public function grupos(){
        return view('grupos')
        ->with(['grupos'=> Grupos::all()]);

    }
    public function grupo_alta()  {
        return view ("grupo_alta");
    }
    public function grupo_registrar(Request $request){
        $this->validate($request,[
            'clave'=> 'required',
            'nombre'=>'required',
            'cuatrimestre'=>'required'
        ]);
    
        $grupo = new Grupos();
        $grupo->clave = $request->input('clave');
        $grupo->nombre = $request->input('nombre');
        $grupo->cuatrimestre = $request->input('cuatrimestre');
        $grupo->save();
    
        return redirect()->route('grupos')->with('success', 'Grupo registrado exitosamente');
    }
    

    public function grupo_detalle($id){
        $query=Grupos::find($id);
        return view('grupo_detalle')
        -> with(['grupo'=> $query ]);
    }
    
    public function grupo_editar($id){
        $query=Grupos::find($id);
        return view('grupo_editar')
        -> with(['grupo'=> $query ]);
    }
    public function grupo_salvar($id, Request $request){
        $query = Grupos::find($id); 
        $query->clave = $request->clave;
        $query->nombre = $request->nombre;
        $query->cuatrimestre = $request->cuatrimestre;
        $query->save();
        
        return redirect()->route("grupo_editar",['id'=>$id])->with('success', 'Grupo actualizado correctamente');
    }
    
    public function grupo_borrar(Grupos $id){
        $id->delete();
        return redirect()->route('grupos');
    }
}
