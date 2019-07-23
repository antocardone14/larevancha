<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TypesProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run() {
         $infos = ["Brocha", "Gloss", "Labial", "Base", "Polvo Tranlucido", "Rubor", "Paleta de sombras", "Iluminador"];

       foreach ($infos as $info) {
         DB::table("typeproducts")->insert([
         "name"=>$info,]);
       }
    }
}
