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
        // Registro de un producto en la base de datos a traves del Modelo
        $category = new Editoriales();
        $category->nombre = $request->input('nombreE');
        $category->direccion = $request->input('direccionE');
        $category->ciudad = $request->input('ciudadE');
        $category->telefono = $request->input('telefonoE');
        $category->save();
        return redirect()->route('editoriales');
    }
}
