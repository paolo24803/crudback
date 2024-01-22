<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Categorias extends Controller
{
    public function index()
    {
        $db = DB::table('categories')->get();

        return $db;    
    }
    public function buscar(){
        $productos = Producto::where('id_categoria', $idCategoria)->get();

        return response()->json($productos);
    }
    public function eliminar(){
        
    }
    public function registrar(){
        
    }
}
