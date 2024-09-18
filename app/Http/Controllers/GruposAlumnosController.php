<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Grupos_Alumnos;

class GruposAlumnosController extends Controller
{
    public function gruposalumnos(){
        return view('gruposalumnos')
        ->with(['gruposalumnos'=> Grupos_Alumnos::all()]);

    }
    public function grupoalumno_alta()  {
        return view ("grupoalumno_alta");
    }
    public function grupoalumno_registrar(Request $request){
        $this->validate($request,[
            'id_grupo'=> 'required',
            'id_alumno'=>'required',
            'activo'=> 'required'
        ]);
    }

    public function grupo_detalle($id){
        $query=Grupos_Alumnos::find($id);
        return view('grupoalumno_detalle')
        -> with(['gruposalumnos'=> $query ]);
    }
    
    public function grupoalumno_editar($id){
        $query=Grupos_Alumnos::find($id);
        return view('grupoalumno_editar')
        -> with(['gruposalumnos'=> $query ]);
    }
    public function grupoalumno_salvar(Grupos_Alumnos $id,Request $request){
        $query=Grupos_Alumnos::find($id->id_alumno_grupo);
        $query->id_grupo=$request->id_grupo;
        $query->id_alumno=$request->id_alumno;
        $query->save();
        return redirect()->route("grupoalumno_editar",['id'=>$id->id_alumno_grupo]);
    }
    public function grupo_borrar(Grupos_Alumnos $id){
        $id->delete();
        return redirect()->route('gruposalumnos');
    }
}
