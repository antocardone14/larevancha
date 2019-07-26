<?php

use Illuminate\Database\Seeder;

class TypeProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $infos = ["brocha", "espejo", "labial", "paleta de sombras", "gloss"];

    foreach ($infos as $info) {
      DB::table("typeproducts")->insert([
      "name"=>$info,]);
    }
    }
}
