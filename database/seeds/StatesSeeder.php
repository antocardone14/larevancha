<?php

use Illuminate\Database\Seeder;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
         $infos = ["Popular", "Nuevo", "Sin Stock", "Oferta", "Ninguno"];

       foreach ($infos as $info) {
         DB::table("states")->insert([
         "name"=>$info,]);
       }
    }
}
