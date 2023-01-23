<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    public function articulosPage(){

        $articulos=Articulo::all();

        return view ('articulo', compact('articulos'));

    }
}
