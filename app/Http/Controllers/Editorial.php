<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Editorial extends Controller
{
     public function listado(){
        $edito=DB::table('editorial')
        
        ->get();
        return view('editoriales.editorial', ['edito'=>$edito]);
    }
}
