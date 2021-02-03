<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Editoriales;

class Editorial extends Controller
{
     public function listado(){
        $editor=DB::table('editorial')        
        ->get();
        return view('editoriales.editorial', ['editor'=>$editor]);
    }

    public function listadoFor(){

        $var=DB::table('editorial')        
        ->get();
        return view('editoriales.formularioEdit',['var'=>$var]);
     }


     public function registroE(Request $request)
    {
        
        $category = new Editoriales();
        $category->nombre = $request->input('nombreE');
        $category->direccion = $request->input('direccionE');
        $category->ciudad = $request->input('ciudadE');
        $category->telefono = $request->input('telefonoE');
        $category->save();
        return redirect()->route('editoriales');
    }
   
    public function encontrar($id){
        $bus= Editoriales::findOrfail($id);
        $editor = Editoriales::all();
        return view('editoriales.actualizarEdit', compact('bus','editor'));
    }

    public function actualizar(Request $request, $id){
        $category = Editoriales::findOrfail($id);//buscar el id del producto para actualizar
        $category->nombre = $request->input('nombreE');
        $category->direccion = $request->input('direccionE');
        $category->ciudad = $request->input('ciudadE');
        $category->telefono = $request->input('telefonoE');
        $category->save();
        return redirect()->route('editoriales');
 }
   
}
