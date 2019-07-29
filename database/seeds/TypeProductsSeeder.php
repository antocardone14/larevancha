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
      $infos = ["brocha", "espejo", "labial", "paleta de sombras", "gloss","polvo translucido","base","duo de sombras","iluminado","polvo bronceador"];

    foreach ($infos as $info) {
      DB::table("typeproducts")->insert([
      "name"=>$info,]);
    }
    }
}
