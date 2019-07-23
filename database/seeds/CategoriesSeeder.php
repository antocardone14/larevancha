<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $infos = ["Rostro", "Labios", "Ojos", "Accesorios"];

      foreach ($infos as $info) {
        DB::table("categories")->insert([
        "name"=>$info,]);
      }
   }
}
