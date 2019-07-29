<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{

  public function crear(){
    return view("agregarProducto");
  }

  public function misProductos(){
    $products = Product::all();
    // dd($products);
    return view("index", compact("products"));
  }

    public function agregarProducto (Request $req){


       $reglas = [
         "name" =>"string|min:1|max:10",
         "description"=>"string",
         "price" =>"integer|min:0|max:100000",   //diferencia entre integer y numerico?
         "image"=>"string",
      ];


      $mensajes =[
        "string" => "El campo :attribute debe ser texto",
        "min" => "El campo :attribute tiene un minimo de :min caracteres",
        "max"=>"El campo :attribute tiene un maximo de :max caracteres",
       "integer" => "El campo :attribute debe ser un numero",
     ];

    $this->validate($req, $reglas,$mensajes);
    }

    public function borrarProducto (Request $req){

      $id= $req["id"];
      $product= Product::find($id);
      $product->delete();

      return redirect("/agregarProducto");

    }

}
