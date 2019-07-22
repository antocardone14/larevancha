<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function agregarProducto (Request $req){

      $reglas = [
        "name" =>"string|min:1|max:10",
        "description"=>"string",
        "price" =>"integer|min:0|max:???"    //diferencia entre integer y numerico?
      ]


     $mensajes =[
       "string" => "El campo :attribute debe ser texto",
       "min" => "El campo :attribute tiene un minimo de :min caracteres",
       "integer" => "El campo :attribute debe ser un numero"
     ]
    }
}
