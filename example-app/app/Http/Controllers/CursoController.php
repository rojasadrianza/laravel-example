<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Curso;


class CursoController extends Controller
{
    public function index(){
        
        //$cursos = Curso::all();
        $cursos = Curso::paginate(); 
        return view('cursos/index', compact('cursos'));
        //return $cursos;
        
        //return view('cursos/index');
    } //Se use index para dirigir a la pagina principal por convencion

    public function create(){
        return view('cursos/create');
    } //Se usa creara para dirigir a la pagina donde se cuentra un formuario por convencion

    public function store(StorePostRequest $request){

        /****ESTA VALIDACION SE PASO AL ARCHIVO DE VALIDACIONES StorePostRequest.php****/
        /*$request->validate([
            'name'=>'required|max:10',     //validacion que pide que sea requerido y tenga un maximo de 10 caracteres
            'descripcion'=>'required|min:10', //validacion que pide que sea requerido y tenga un minimo de 10 caracteres
            'categoria'=>'required'
        ]);*/
        
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();

        //return $request->all();
        return redirect()->route('mostrarCursos',$curso);
    } 


    
    public function edit(Curso $curso){  
        
              return view('cursos/edit', compact('curso'));
        
    } 

    public function update(Request $request,Curso $curso){  

        $request->validate([
            'name'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required'
        ]);

               
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();       
        
        return redirect()->route('mostrarCursos',$curso);
  
} 
    
    public function show($id){
        //return view('cursos/show', ['curso' => $curso]);
        $curso = Curso::find($id);
        return view('cursos/show', compact('curso'));
    } //Se usa show para dirigir a la pagina donde mostramos una informacion por convencion
}
