<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $guarded = [];

    public function usuario(){
      return $this->belongsTo("App\User", "user_id");
    }

    public function productos(){
      return $this->hasMany("App\Product", "id");
    }

}
