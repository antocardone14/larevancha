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
                "description" => "La brocha perfecta para aplicar todo tipo de productos en polvo con un terminado natural sin el mayor esfuerzo. Esta creada con pelo sintético, por lo que la convierte en una brocha 100% cruelty free.",
                "price" => "1000",
                "image" => "41-Brocha 001.jpg",
                "category_id" => "4",
                'typeproduct_id' => '1',
                "state_id" => "2",
              ],
              [
                "name" => "Rubor Cremoso Rosa",
                "description" => "Un rubor en crema con tonalidad rosa frio que te dará una apariencia saludable y tierna. Con una formula hidratante, es cómodo de llevar a la vez de que trae color y brillo a tu rostro.",
                "price" => "1300",
                "image" => "81-Rubor Cremoso Rosa.jpg",
                "category_id" => "1",
                'typeproduct_id' => '2',
                "state_id" => "2",
              ],
              [
                "name" => "Polvo Translucido",
                "description" => "Nuestro polvo translucido es híper liviano en tu rostro y no se notará en fotos! Este adapta perfectamente a cualquier tono de piel y a su vez, matifica para que los productos líquidos o en crema que hayas aplicado previamente duren mucho más!",
                "price" => "1400",
                "image" => "68-Polvo Translucido.jpg",
                "category_id" => "1",
                'typeproduct_id' => '3',
                "state_id" => "2",
              ],
              [
                "name" => "Gloss Coral",
                "description" => "El gloss que todas necesitamos tener, con un brillo explosivo que se ve tan bien como se siente. Con una formula hidratante, nuestro gloss protege tus labios a la vez de que los hace ver perfectos. Por último, tiene un aroma a vainilla irresistible!",
                "price" => "1100",
                "image" => "73-Gloss Coral.jpg",
                "category_id" => "2",
                'typeproduct_id' => '4',
                "state_id" => "1",
              ],
              [
                "name" => "Iluminador Duo",
                "description" => "Dos iluminadores de larga duración que se complementan para lograr el tono perfecto para tu piel, con una fórmula de crema a polvo con un terminado súper metálico para que les des protagonismo a todas las zonas altas de tu rostro como tus pómulos y el arco de las cejas.",
                "price" => "1300",
                "image" => "87-Iluminador Duo.jpg",
                "category_id" => "1",
                'typeproduct_id' => '5',
                "state_id" => "1",
              ],
              [
                "name" => "Labial Matte Rojo",
                "description" => "Una formula liviana en los labios, de larga duración y con un terminado matte, en una tonalidad que quedara perfecta en todos los tonos de piel. Un labial con un impactante color y completamente opaco desde la primera aplicación.",
                "price" => "1200",
                "image" => "95-Labial Matte.jpg",
                "category_id" => "2",
                'typeproduct_id' => '6',
                "state_id" => "1",
              ],
              [
                "name" => "Paleta de Sombras",
                "description" => "La paleta de sombras, con tonos neutros y cálidos para los maquillajes de diario, y a su vez, con algunos colores más vibrantes para que saques tu artista interior y te inspires en colores! Con una formula fácil de difuminar, lograras cualquier tipo de maquillaje que imagines.",
                "price" => "1800",
                "image" => "26-Paleta de Sombras.jpg",
                "category_id" => "3",
                'typeproduct_id' => '7',
                "state_id" => "1",
              ],
              [
                "name" => "Base Matte 001",
                "description" => "Una  base de larga duración, con terminado matte, con cobertura de mediana a alta una gran abanico de tonalidades para todo color de piel. Esta base cambiara la forma en la que se ve tu piel, teniendo una formula libre de aceites y que se mantiene perfecta en climas húmedos. Sin tapar tus poros, esta base se convierte en tu segunda piel para que te veas radiante.",
                "price" => "1900",
                "image" => "35-Base Matte 001.png",
                "category_id" => "1",
                'typeproduct_id' => '8',
                "state_id" => "1",
              ],
              [
                "name" => "Labial Matte Azul",
                "description" => "Un labial con la mejor fórmula matte, que dura todo el tiempo que vos necesitas, y con una pigmentación completamente opaca y un color completamente único, que se escapa de la regla de los labiales neutros y rojos.",
                "price" => "1200",
                "image" => "11-Labial Matte Azul.png",
                "category_id" => "2",
                'typeproduct_id' => '9',
                "state_id" => "2",
              ],
              [
                "name" => "Gloss Rosa",
                "description" => "El gloss que todas necesitamos tener, con un brillo explosivo que se ve tan bien como se siente. Con una formula hidratante y un color rosa sutil, nuestro gloss protege tus labios a la vez de que los hace ver perfectos. Por último, tiene un aroma a vainilla irresistible!",
                "price" => "1100",
                "image" => "81-Gloss Rosa.png",
                "category_id" => "2",
                'typeproduct_id' => '10',
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
