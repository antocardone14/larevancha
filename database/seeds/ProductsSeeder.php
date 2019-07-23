<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(){
             $infos = [
              [
                "name" => "Brocha 001",
                "description" => "Una linda brocha",
                "price" => "1000",
                "image" => "41-Brocha 001.jpg",
                "category_id" => "4",
                "state_id" => "2",
                'typeproduct_id' => '1',
              ],
              [
                "name" => "Rubor Cremoso Rosa",
                "description" => "Lalala",
                "price" => "1300",
                "image" => "81-Rubor Cremoso Rosa.jpg",
                "category_id" => "1",
                'typeproduct_id' => '6',
                "state_id" => "2",
              ],
              [
                "name" => "Polvo Translucido",
                "description" => "Probando",
                "price" => "1400",
                "image" => "68-Polvo Translucido.jpg",
                "category_id" => "1",
                'typeproduct_id' => '5',
                "state_id" => "2",
              ],
              [
                "name" => "Gloss Coral",
                "description" => "Prueba Descripción",
                "price" => "1100",
                "image" => "73-Gloss Coral.jpg",
                "category_id" => "2",
                'typeproduct_id' => '2',
                "state_id" => "1",
              ],
              [
                "name" => "Iluminador Duo",
                "description" => "Lalala",
                "price" => "1300",
                "image" => "87-Iluminador Duo.jpg",
                "category_id" => "1",
                'typeproduct_id' => '8',
                "state_id" => "1",
              ],
              [
                "name" => "Labial Matte",
                "description" => "Lasdas564",
                "price" => "1200",
                "image" => "95-Labial Matte.jpg",
                "category_id" => "2",
                'typeproduct_id' => '3',
                "state_id" => "1",
              ],
              [
                "name" => "Paleta de Sombras",
                "description" => "L4654asdaalala",
                "price" => "1800",
                "image" => "26-Paleta de Sombras.jpg",
                "category_id" => "3",
                'typeproduct_id' => '7',
                "state_id" => "1",
              ],
              [
                "name" => "Base Matte 001",
                "description" => "Prueba",
                "price" => "1900",
                "image" => "35-Base Matte 001.png",
                "category_id" => "1",
                'typeproduct_id' => '4',
                "state_id" => "1",
              ],
              [
                "name" => "Labial Matte Azul",
                "description" => "Lalala",
                "price" => "1200",
                "image" => "11-Labial Matte Azul.png",
                "category_id" => "2",
                'typeproduct_id' => '3',
                "state_id" => "2",
              ],
              [
                "name" => "Gloss Rosa",
                "description" => "Lalala",
                "price" => "1100",
                "image" => "81-Gloss Rosa.png",
                "category_id" => "2",
                'typeproduct_id' => '2',
                "state_id" => "2",
              ],
            ];
            foreach ($infos as $info){
              DB::table('products')->insert([
                  'name'=> $info['name'],
                  'description' => $info['description'],
                  'price' => $info['price'],
                  'state_id' => $info['state_id'],
                  'category_id' => $info['category_id'],
                  'typeproduct_id' => $info['typeproduct_id'],
                   'image' => $info['image'],
              ]);
            }
        }
     }
