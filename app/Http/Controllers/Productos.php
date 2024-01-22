<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Productos extends Controller
{
    public function index()
    {
        $productos = DB::table('productos')->get();

        return $productos;    
    }
    public function buscar(){
        
    }
    public function eliminar(){
        
    }
    public function registrar(){
        
    }
}
