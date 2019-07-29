<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  public $guarded = [];

  public function Category(){
    return $this->belongsTo("App\Category", "category_id");
  }

  public function State(){
    return $this->belongsTo("App\State", "state_id");
  }

  public function Typeproduct(){
    return $this->belongsTo("App\Typeproduct", "typeproduct_id");
  }

  public function precio(){
    $precio = $this->price;
    if($precio > 100){
      return "es caro";
    }
  }
}
